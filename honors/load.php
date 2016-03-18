<?php
// Import credentials for db connection
require_once("./credentials.php");

// Get values
$dsn = Credentials::getDSN();
$username = Credentials::getUsername();
$password = Credentials::getPassword();

// If POST id is not set, default to 1.
// This is for the include on ./index.php
if(!isset($_POST['id'])) {
    $php = true;
    $_POST['id'] = 1;
}

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = "SELECT * FROM honors WHERE id >= ? LIMIT 3";

    $query = $conn->prepare($statement);
    $query->bindValue(1, $_POST['id'], PDO::PARAM_INT);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    // If there were no results, throw an error
    if($query->rowCount() == 0) {
        header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
    } else {
        foreach($results as $row) {
            echo $row["html"] . "\n";
        }
    }
} catch(PDOException $e) {
    if($php) {
        echo "<h1 style='text-align: center; padding: 1em; background-color: #FFF;'>There was an error fetching posts.</h1>";
        unset($php);
    } else {
        header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
    }
    exit();
}

?>

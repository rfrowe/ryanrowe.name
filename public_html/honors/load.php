<?php
// Import credentials for db connection
require_once("./credentials.php");

// Get values
$dsn = Credentials::getDSN();
$username = Credentials::getUsername();
$password = Credentials::getPassword();

// If POST id is not set, default to 1.
// This is for the include on ./index.php
if(!isset($_POST["id"])) {
    $_POST["id"] = 1;
}

try {
    switch ($_POST["year"]) {
        case "senior":
            $year = "senior";
            break;
        case "junior":
            $year = "junior";
            break;
        case "sophomore":
            $year = "sophomore";
            break;
        default:
            $year = "freshman";
    }
    $conn = new PDO($dsn, $username, $password, [ PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' ]);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = "SELECT * FROM courses c WHERE year = ? AND EXISTS (SELECT 1 FROM posts p WHERE p.course_id = c.id) LIMIT 10";

    $query = $conn->prepare($statement);
    $query->bindValue(1, $year, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    // If there were no results, throw an error
    if($query->rowCount() == 0) {
        http_response_code(404);
    } else {
        foreach($results as &$row) {
            //echo $row["html"] . "\n";
            $query = $conn->prepare("SELECT * FROM posts WHERE course_id = ?");
            $query-> bindValue(1, $row["id"], PDO::PARAM_INT);
            $query->execute();
            $row["posts"] = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        echo(json_encode($results));
    }
} catch(PDOException $e) {
    if($php) {
        echo "<h1 style='text-align: center; padding: 1em; margin: 0; color: #FFF; background-color: #3A3A3A;'>There was an error fetching posts.</h1>";
        unset($php);
    } else {
        header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
        echo($e);
    }
    exit();
}

?>

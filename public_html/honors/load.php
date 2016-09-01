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
    $_POST["id"] = 0;
}

try {
    $conn = new PDO($dsn, $username, $password, [ PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' ]);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = "SELECT * FROM courses c WHERE";
    if (isset($_POST["year"])) {
        $statement .= " c.year = :year AND";
    }
    if (isset($_POST["id"])) {
        $statement .= " c.id > :id AND";
    }
    $statement .= " EXISTS (SELECT 1 FROM posts p WHERE p.course_id = c.id) LIMIT 4";

    $query = $conn->prepare($statement);
    if (isset($_POST["year"])) {
        $query->bindValue(":year", $_POST["year"], PDO::PARAM_STR);
    }
    if (isset($_POST["id"])) {
        $query->bindValue(":id", $_POST["id"], PDO::PARAM_INT);
    }
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
    http_response_code(500);
}

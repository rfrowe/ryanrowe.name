<?php
// Import credentials for db connection
require_once("./credentials.php");
header('Content-type: text/html; charset=UTF-8');

// Get values
$dsn = Credentials::getDSN();
$username = Credentials::getUsername();
$password = Credentials::getPassword();

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn -> exec("set names utf8");

    $statement = "SELECT * FROM posts WHERE url = ?";

    $query = $conn->prepare($statement);
    $query->bindValue(1, str_replace("/", "", $_GET['id']), PDO::PARAM_INT);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    // If there were no results, throw an error
    if($query->rowCount() == 0) {
        http_response_code(404);
        include($_SERVER['DOCUMENT_ROOT'] . "/files/error/404.php");
        exit();
    } else {
        $text = $results[0]["content"];
        $description = $results[0]["meta"];
        $style = $results[0]["style"];
        $title = $results[0]["title"];
        $js = $results[0]["js"];
    }
} catch(PDOException $e) {
    http_response_code(404);
    include($_SERVER['DOCUMENT_ROOT'] . "/files/error/404.php");
    exit();
}

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= strip_tags($title) ?></title>
    <meta name="description" content="<?php echo $meta; ?>">

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/common.php") ?>

    <?php if (strpos($_GET["id"], "RandomCube") !== false) { ?>
        <script src="/files/js/processing.js"></script>
    <?php } ?>

    <style>
        <?= $style ?>
    </style>
    <script>
        <?= $js ?>
    </script>
</head>

<body>
<?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/header.html") ?>
<main class="container">
    <h2><?= $title; ?></h2>
    <div class="text">
        <?= $text; ?>
    </div>
</main>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/files/footer.php") ?>
</body>
</html>

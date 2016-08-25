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

    $statement = "SELECT * FROM posts WHERE id = ?";

    $query = $conn->prepare($statement);
    $query->bindValue(1, str_replace("/", "", $_GET['id']), PDO::PARAM_INT);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    // If there were no results, throw an error
    if($query->rowCount() == 0) {
        header($_SERVER["SERVER_PROTOCOL"]." 404 File Not Found");
        include($_SERVER['DOCUMENT_ROOT'] . "/files/404.php");
        exit();
    } else {
        $text = $results[0]["html"];
        $description = $results[0]["description"];
        $style = $results[0]["style"];
        $title = $results[0]["title"];
    }
} catch(PDOException $e) {
    $title = "Error";
    $text = "<h1>There was an error fetching this post</h1>";
}

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ryan Rowe &mdash; <?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/common.php") ?>

    <style>
        <?= $style ?>
    </style>
</head>

<body>
<div class="container">
  <?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/header.html") ?>
  <article class="content offset">
    <section class="main">
    	<h1><?php echo $title; ?></h1>
    	<section class="text dropshadow">
<?php echo $text; ?>
        </section>
    </section> <!--end #welcome-->
  </article> <!-- end .content -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/footer.php") ?>
</div> <!-- end .container -->
</body>
</html>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ryan Rowe's Portfolio</title>

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/common.php") ?>
</head>

<body>
<div class="container">
  <?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/header.html") ?>
  <article class="content"> <!--end #main-image-->
  		<section class="main offset">
        <h1>Error 500! Well That Didn't Work.</h1>
        <section class="text dropshadow">
        <p>Our servers are having trouble. <a href="javascript:history.back()">Try going back.</a></p>
        </section>
        </section>
  </article> <!-- end .content -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/footer.php") ?>
</div> <!-- end .container -->
</body>
</html>

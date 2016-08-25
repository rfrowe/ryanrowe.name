<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ryan Rowe's Portfolio</title>

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/imports.php") ?>
</head>

<body>
<div class="container">
  <?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/header.html") ?>
  <article class="content"> <!--end #main-image-->
  		<section class="main offset">
        <h1>404! File Not Found</h1>
        <section class="text dropshadow">
        <p>We couldn&rsquo;t find anything. <a href="javascript:history.back()">Try going back.</a></p>
        </section>
        </section>
  </article> <!-- end .content -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/footer.php") ?>
</div> <!-- end .container -->
</body>
</html>

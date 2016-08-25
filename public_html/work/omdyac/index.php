<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="An archived version of a website I made for the Unitarian Universalist Association Ohio-Meadville District">
    <title>Ryan Rowe's Portfolio</title>

    <style>
	.content p {
		text-align: ceter;
	}.container, html, body {
		height: 100%;
	} .container {
		position: relative;
	} .content {
		position:absolute;
		left: 0;
		right: 0;
		bottom: 0;
		top: 3.5em;
	} footer {
		color: #D9D9D9;
	}
	</style>

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/common.php") ?>

    <script>
        // Unset scrollbar.js
        $(window).unbind("scroll");
        $(window).unbind("resize");
    </script>
</head>

<body>
<div class="container">
  <?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/header.html") ?>
  <article class="content"> <!--end #main-image-->
     <iframe src="./public_html/index.php" style="width: 100%; height: 100%">
     <p>Please use a modern web browser to view this site.</p>
     </iframe>
  </article> <!-- end .content -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/footer.php") ?>
</div> <!-- end .container -->
</body>
</html>

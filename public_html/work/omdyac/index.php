<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/favicons.html") ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
    <script src="/js/analytics.js"></script>
    <!-- <script src="/files/scrollbar.js"></script> -->

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
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

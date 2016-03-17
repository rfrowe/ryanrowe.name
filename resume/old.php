<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ryan Rowe's Portfolio</title>

    <style>
	.content p {
		text-align: ceter;
	}.container, html, body {
		height: 100%;
		overflow: hidden;
	} .container {
		position: relative;
	} .content {
		position: fixed;
		height: 100%;
		left: 0;
		right: 0;
		bottom: 0;
	} footer {
		color: #D9D9D9;
	}
	</style>

    <link href="/files/css/style.css" rel="stylesheet" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
    <script src="/files/scripts/analytics.js"></script>
    <!-- <script src="/files/scrollbar.js"></script> -->

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script>
	$(window).resize(function(e) {
        $("object").css("margin-top",$("#scroll").height());
    });
	</script>
</head>

<body>
<div class="container">
  <?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/header.html") ?>
  <article class="content"> <!--end #main-image-->
      <object data="/files/images/Resume.pdf#toolbar=0" style="width: 100%; height: 100%;">
  		<section class="main offset">
        <h1>Uh oh! PDFs are not supported in your browser.</h1> <p><a href='/files/images/Resume.pdf'>Please download my resume instead.</a></p>
        </section>
      </object>
  </article> <!-- end .content -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/footer.php") ?>
</div> <!-- end .container -->
</body>
</html>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ryan Rowe &mdash; Who Am I?</title>
    <meta name="description" content="A series of projects that I made for ART 233: Intro to Kiln-Formed Glass">

    <link href="/files/css/style.css" rel="stylesheet" type="text/css">
    <?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/favicons.html") ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
    <script src="/files/scripts/analytics.js"></script>
    <script src="/files/scripts/scrollbar.js"></script>
    <!-- <script src="/files/scrollbar.js"></script> -->

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style>
        .text h3 {
            margin-bottom: 0.5em;
        }
    </style>
</head>

<body>
<div class="container">
  <?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/header.html") ?>
  <article class="content offset">
    <section class="main">
    	<h1>ART 233 B</h1>
    	<section class="text dropshadow">
        <h3>Half Full</h2>
        <img style="width: 100%;" src="/files/images/glass.jpg" alt="Six cups, all divided in half in unique and unexpected ways" />
        <p>One of the projects I made for this class was entitled &ldquo;Half Full.&rdquo; It explored the common &ldquo;glass half empty/half full&rdquo; concept in more unexpected ways. One glass, for example, was bisected and and one half was attached to a mirror such that when it is half full, it looks completely full. In another, blue and clear water are separated by a perforated disk with nothing but surface tension keeping them separate. The slightest disturbance will cause the two to mix.</p>
        </section>
    </section> <!--end #welcome-->
  </article> <!-- end .content -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/footer.php") ?>
</div> <!-- end .container -->
</body>
</html>

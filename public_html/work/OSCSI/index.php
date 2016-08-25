<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A presentation I gave outlining how my group used MATLAB to analyse pictures from NASA's LASCO C2 telescope to search for new comets.">
    <title>Ryan Rowe's Portfolio</title>

    <style>
	#cube {
		width: 30%;
		float: left;
		margin-right: 1em;
	}
	</style>

	<?php include($_SERVER['DOCUMENT_ROOT'] . "/files/imports.php") ?>

    <script>
	$(document).ready(function(e) {
		$(".visit").click(function(e) {
            e.stopPropagation();
        });
        $('.toggle').click(function(){
			if($(this).children(".dropdown").css("transform") != "none") {
				$(this).children(".dropdown").css({'-webkit-transform' : 'none',
						 '-moz-transform' : 'none',
						 '-ms-transform' : 'none',
						 'transform' : 'none'});
				$(this).removeClass("open");
			} else {
				$(this).children(".dropdown").css({'-webkit-transform' : 'rotate('+ 90 +'deg)',
						 '-moz-transform' : 'rotate('+ 90 +'deg)',
						 '-ms-transform' : 'rotate('+ 90 +'deg)',
						 'transform' : 'rotate('+ 90 + 'deg)'});
			    $(this).addClass("open");
			}
			$(this).siblings(".toggleable").slideToggle(300);
    	});
    });
	</script>
</head>

<body>
<div class="container">
  <?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/header.html") ?>
  <article class="content offset">
  	<section class="main">
    	<h1>Ohio Supercomputing Center Summer Institute</h1>
        <section class="dropshadow">
        <iframe id="iframe_container" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" width="100%" style="height: 30em;" src="https://prezi.com/embed/zo5wjwz3nzty/?bgcolor=ffffff&amp;lock_to_path=1&amp;autoplay=0&amp;autohide_ctrls=0&amp;landing_data=bHVZZmNaNDBIWnNjdEVENDRhZDFNZGNIUE43MHdLNWpsdFJLb2ZHanI0VTRjUkx2YUxZMmxGckw3TWNOa05WMFlBPT0&amp;landing_sign=TbxktB1u0PHlOMxLYnJbuV_O8R8IeLMMzla56LnzC3w"></iframe>
        </section>
     </section>
  </article> <!-- end .content -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/footer.php") ?>
</div> <!-- end .container -->
</body>
</html>

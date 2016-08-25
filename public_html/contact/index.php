<?php
session_start();
require_once("./CSFR.php");
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ryan Rowe &mdash; Contact Me</title>

    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/favicons.html") ?>
    <link href="/css/contact.css" rel="stylesheet" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
    <script src="/files/js/analytics.js"></script>
    <script src="/files/js/scrollbar.js"></script>
    <!-- <script src="/files/scrollbar.js"></script> -->

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php
    $content = "";
	$name = "";
	$email = "";
	if(isset($_SESSION['content'])) {
		$content = $_SESSION['content'];
	} if(isset($_SESSION['name'])) {
		$name = $_SESSION['name'];
	} if(isset($_SESSION['email'])) {
		$email = $_SESSION['email'];
	}
	?>

    <script>
	function checkStuff() {
		if (<?php if(isset($_SESSION['captchaError']) && $_SESSION['captchaError'] === true) { echo "true"; } else { echo "false"; } unset($_SESSION['captchaError']);?> == true) {
			alert("You entered the reCaptcha incorrectly");
		}
		if (<?php if(isset($_SESSION['mailSent']) && $_SESSION['mailSent'] === false) { echo "false"; } else { echo "true"; } ?> == false) {
			alert("There was an error sending your email. Please try again or email me directly at ry@nrowe.name");
		}
		<?php
			unset($_SESSION['content']);
			unset($_SESSION['name']);
			unset($_SESSION['email']);
		?>
	}

	function checkEmail() {
	var email = document.getElementById('emailspot');
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (!filter.test(email.value)) {
		alert('Please provide a valid email address');
		email.focus;
		return false;
		}
	}
	</script>

    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body onLoad="checkStuff();">
<div class="container">
  <?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/header.html") ?>
  <article class="content offset">
    <section class="main">
    	<h1>Toss me a message</h1>
        <?php if(isset($_SESSION['mailSent']) && $_SESSION['mailSent'] === true) { ?>
        <h3>I'll get back to you shortly!</h3>
        <?php unset($_SESSION['mailSent']); } else { ?>
        <form class="dropshadow email" action="./contact.php" method="post" name="contact" onSubmit="return checkEmail();">
        <input type="text" name="name" class="text_input empty" placeholder="Name" value="<?php echo $name; ?>" required/>
        <input type="email" name="email" class="text_input email" id='emailspot' placeholder="Email" value="<?php echo $email; ?>" required/>
        <textarea name="content" rows="10" class="text_area empty" placeholder="Message" required><?php echo $content; ?></textarea>
        <div class="g-recaptcha" data-sitekey="6LddJhUTAAAAAKmG64hNG_QhqUqn0emEq09MSkdO"></div>
        <input type="submit" class="button dropshadow" id="send" name="submit" value="Send"/>
        <input type="hidden" name="CSRFName" value="contact" />
        <input type="hidden" name="CSRFToken" value="<?php echo csrfguard_generate_token("contact"); ?>" />
        </form>
        <?php   } ?>
    </section> <!--end #welcome-->
  </article> <!-- end .content -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/footer.php") ?>
</div> <!-- end .container -->
</body>
</html>

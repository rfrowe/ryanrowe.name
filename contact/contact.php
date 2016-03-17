<?php
	session_start();
	require_once("./credentials.php");
	require_once("./CSFR.php");
	require_once('/files/scripts/autoload.php');
    require_once("/files/scripts/PHPMailer/PHPMailerAutoload.php");

	$recaptcha = new \ReCaptcha\ReCaptcha(Credentials::PRIVKEY);
	$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

	$email = $_POST['email'];
	$subject = "Message from portfolio from: " . $_POST['name'];
	$body = $_POST['content'];t
	if (!$resp->isSuccess()
	    or !isset($_POST['CSRFName'])
	    or !isset($_POST['CSRFToken'])
	    or !csrfguard_validate_token($_POST['CSRFName'], $_POST['CSRFToken'])) {
			$_SESSION['captchaError'] = true;
			$_SESSION['content'] = $body;
			$_SESSION['name'] = $_POST['name'];
			$_SESSION['email'] = $email;
			header("location:./");
	} else {

		$mail = new PHPMailer;
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = Credentials::HOST;  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = Credentials::USER;                 // SMTP username
		$mail->Password = Credentials::PASS;                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;

		$mail->setFrom(Credentials::USER);
		$mail->addAddress(Credentials::User, "Ryan Rowe");
		$mail->addCC($email);
		$mail->Subject = $subject;
		$mail->Body = $body;

		if($mail->send()) {
			$_SESSION['mailSent'] = true;
			header("location:./");
		} else {
			$_SESSION['mailSent'] = false;
			$_SESSION['content'] = $body;
			$_SESSION['name'] = $_POST['name'];
			$_SESSION['email'] = $email;
			$_SESSION['subject'] = $_POST['subject'];
			header("location:./");
		}
	}
?>

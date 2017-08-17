<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/files/php/smtp.secret.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/files/php/CSFR.php');
//require_once($_SERVER['DOCUMENT_ROOT'].'/files/php/autoload.php');
require_once($_SERVER['DOCUMENT_ROOT']."/files/php/PHPMailer/PHPMailerAutoload.php");

print_r($_SESSION, FALSE);
echo "\n";

//$recaptcha = new \ReCaptcha\ReCaptcha(Credentials::PRIVKEY);
//$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

$email = $_POST['email'];
$subject = "Message from portfolio from: " . $_POST['name'];
$body = $_POST['message'];

if (!isset($_POST['CSRFName'])
	or !isset($_POST['CSRFToken'])
	or !csrfguard_validate_token($_POST['CSRFName'], $_POST['CSRFToken'])) {
	//or !$resp->isSuccess()) {
	http_response_code(400);
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
	$mail->addAddress(Credentials::USER, "Ryan Rowe");
	$mail->addCC($email);
	$mail->Subject = $subject;
	$mail->Body = $body;

	if(!$mail->send()) {
		http_response_code(400);
	}
}

<?php
/*SendGrid Library*/
require_once ('vendor/autoload.php');

/*Post Data*/
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

/*Content*/
$from = new SendGrid\Email($name, 'gotripps@gmail.com');
$subject = "Portfolio Contact Form";
$to = new SendGrid\Email("Windsor", "windsorjunior@hotmail.com");
$content = new SendGrid\Content("text/html", "
	<b>Email:</b> {$email}<br>
	<br>
	<b>Name:</b> {$name}<br>
	<br>
	<b>Message:</b> {$message}
	");

/*Send the mail*/
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = ('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');
$sg = new \SendGrid($apiKey);

/*Response*/
$response = $sg->client->mail()->send()->post($mail); 
?>

<?php

echo "<br>";
echo "<center><h1>Thank You for your message!</h1></center>";
echo "<br>";
echo "<center><h2>I will get in touch as soon as possible.</h2></center>";
echo "<br>";
echo "<center><h2><a href='/portfolio.html'>Click Here</a>to return to the page.</h2></center>";

?>


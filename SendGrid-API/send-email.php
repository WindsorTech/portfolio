<?php
/*SendGrid Library*/
require_once ('vendor/autoload.php');

/*Post Data*/
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

/*Content*/
$from = new SendGrid\Email("FROM_NAME", "gotripps@gmail.com");
$subject = "SUBJECT";
$to = new SendGrid\Email("TO_NAME", "windsorjunior@hotmail.com");
$content = new SendGrid\Content("text/html", "CONTENT_GOES_HERE");

/*Send the mail*/
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = ('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');
$sg = new \SendGrid($apiKey);

/*Response*/
$response = $sg->client->mail()->send()->post($mail);
?>

<!--Print the response-->
<pre>
    <?php
    var_dump($response);
    ?>
</pre>

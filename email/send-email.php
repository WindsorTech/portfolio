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

<html>
<head>
  <title>Windsor Edeling</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css" rel="stylesheet" integrity="sha384-zF4BRsG/fLiTGfR9QL82DrilZxrwgY/+du4p/c7J72zZj+FLYq4zY00RylP9ZjiT" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="/css/style.css">

</head>

<body>

    <div> <!-- NAVBAR -->
        <div class="navbar text-center">
          <h2 class="center-pills">Windsor Roberto Edeling</h2>
        </div>
    </div> <!-- NAVBAR -->

    <div class="text-center">
          <ul class="nav nav-pills center-pills">
            <li class="active"><a href="/index.html">About</a></li>
            <li class="active"><a href="/portfolio.html">Portfolio</a></li>
            <li class="active"><a href="/contact.html">Contact</a></li>
          </ul>
    </div>

<div class="container">

  <div class="title"> <!-- HEADER -->
    <h1>Contact</h1>
  </div>
  
    <div class="row">

    <div class="col-md-9 well">

        <form action="email/send-email.php" method="post">
          
            <div class="form-group contact">
              <label for="form_name" class="col-lg-1 control-label">Name</label>
              <div class="col-lg-12">
              <input type="text" class="form-control" name="name" placeholder="Name">
              </div>
            </div> 

            <div class="form-group contact">
              <label for="email" class="col-lg-1 control-label">Email</label>
              <div class="col-lg-12">
              <input type="text" class="form-control" name="email" placeholder="Email">
              </div>
            </div>

            <div class="form-group contact">
              <label for="message" class="col-lg-1 control-label">Message</label>
              <div class="col-lg-12">
                <textarea type="text" class="form-control" name="message" rows="5" placeholder="Write Your Message Here"></textarea>
              </div>
            </div> 
            
            <div class="form-group">
              <div class="col-lg-12 send-btn">
              <h4><b>Thank you for your message, I will get in touch as soon as possible!</b></h4>
              </div>
            </div>
        
      </form>
  </div>
  


      <div class="col-md-3">
        <div class="socialbuttons well">
          <center>Let's Connect</center>
          <hr>
          <center><a href="https://www.linkedin.com/in/windsoredeling" target="_blank"> <img src="/images/linkedin-icon.png" width="50" height="50"></a> <a href="https://github.com/windsor80" target="_blank"><img src="/images/github-icon.png" width="50" height="50"></a> <a href="https://facebook.com/windsor.roberto" target="_blank"><img src="/images/facebook-icon.png" width="50" height="50"></a></center>
        </div>
      </div>

    </div>

    </div>

    <div class="footer"> <!--FOOTER-->
    Copyright 2017 Windsor Edeling
    </div>
</body>
</html>
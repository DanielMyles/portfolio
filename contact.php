<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: danielmyles.com'; 
    $to = 'danielmyles36@hotmail.com'; 
    $subject = 'Hello';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['submit'] && $human == '10') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '10') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>

<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" type="image/x-icon" href="images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="/path/to/deathly-hallows-152-183279.png">
<title>Contact Form</title>
<link rel="stylesheet" href="style7.css">
<title>Contact Me</title>
</head>

<body>
		<h1>Send me a message</h1>
                <h1>@</h1>
                <h2>danielmyles36@hotmail.com</h2>
                <h1>or here</h1>

    <header class="body">
    </header>

    <section class="body">
<form method="post" action="contact.php">
        
    <label>Name</label>
    <input name="name" placeholder="Your name here">
            
    <label>Email</label>
    <input name="email" type="email" placeholder="Your e-mail">
            
    <label>Message</label>
    <textarea name="message" placeholder="Your message"></textarea>
	<label>(Prove your not  robot)*What is 8+2? </label>
<input name="human" placeholder="Your answer here">
            
    <input id="submit" name="submit" type="submit" value="Submit">
        
</form>
    </section>

    <footer class="body">
    </footer>

</body>

</html>
<?php

if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="Bid Request";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
    <link rel="stylesheet" href="BMElectrical.css">
</head>

<div class="hero-image">
    <div class="hero-text">
        <t1>B&M Electrical<br /></t1>
        <st1>Commercial &#8226 Residential &#8226 Industrial<br /><br /></st1>
        <button onclick="document.location = 'bid.php'">Request Bid!</button>
        <st1><br /><br /></st1>;
        <button onclick="document.location = 'home.html'">Home</button>
        <button onclick="document.location = 'contact.html'">Contact Us</button>
        <button onclick="document.location = 'photos.html'">Our Work</button>
    </div>
</div>

<body>
 <p><br \><br \><br \><br \><br \></p>>
    <?=$thankYou ?>

    <form method="post" action="contact.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email address:</label>
        <input name="senderEmail">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>

</body>

</html>
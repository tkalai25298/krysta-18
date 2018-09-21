<?php
if($_POST["submit"]) {
    $recipient="tkalai25298@gmail.com";
    $subject="Krysta Registration";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\nPhone no: $message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
    header("location:index.php");
}
?>

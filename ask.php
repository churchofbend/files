<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Name: $name \n Email: $email \n Message: $message";
$recipient = "bend27coc@gmail.com";
$subject = "Website Form Submission";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: thanks.htm");
?>
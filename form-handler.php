<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from='elenaellav22@gmail.com'; ///@domain id
$email_subject = 'New Form Submission';

$email_body="User Name: $name.\n".
"User Email: $visitor_email.\n".
"Subject: $subject.\n".
"User Message: $message.\n";

$to = 'elenaellav22@gmail.com';
$heaters = "From: $email_from \r\n";
$heaters = "Reply-To: $visitor_email \r\n";
mail($to, $email_subject,$email_body, $heaters);
header("Location: index.html");



?>

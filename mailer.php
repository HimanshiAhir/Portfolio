<?php
$to = "mail@himanshiahir.com";
$subject = "Support requested by ".$_POST['name'];
$name_field = $_POST['name'];
$email_field = $_POST['email'];
// $subjest_message = $_POST['subject'];
$message = $_POST['comments'];

$headers = 'From: '.$_POST['email'].'' . "
" .
   'Reply-To: '.$_POST['email'].'' . "
" .
   'X-Mailer: PHP/' . phpversion();
 

// $body = $subjest_message;
$body = $message;

mail($to, $subject, $body, $headers );
header( 'Location: thank-you.html' ) ; //replace with landing page.
?> 
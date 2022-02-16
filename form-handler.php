<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'file:///C:/Users/Kekereogun%20Idris/Desktop/Sulam%20Web%20design/contact.html';

$email_subject - 'Sulam Nig Enterprise Form';

$email_body = "Username: $name.\n".
               "User Email: $visitor_email.\n".
               "Subject: $subject.\n".
               "User Message: $message.\n";

$to = 'sulaimonkekereogun01@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html"); 
?>
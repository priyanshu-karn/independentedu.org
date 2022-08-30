<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$email_from = 'infoinsedu.com.np'

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
                 "User Email: $visitor_email.\n".
                 "Subject: $subject.\n".
                 "User Message: $messager .\n";

$to = 'priyanshukarn0to0@gmail.com';                 

$headers = "form: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>
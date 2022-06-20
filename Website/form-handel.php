<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_from = 'bishwakarmamanisha05@gmail.com';

$email_subject = "New Form Submission";

$email_body = "user Name: $name.\n".
				"user Email: $visitor_email.\n".
				"Subject: $subject.\n".
				"User Message: $message .\n";
$to = 'bishwakarmamanisha05@gmail.com';

$header = "From: $email_from \r\n";

$header .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$heades);

header("Location: contact.html");
header("Location: blog.html");
?>
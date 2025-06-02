<?php
$name = $_POST['name'];
$visitor_email = $_POST['email']; // FIXED: should be $_POST (not $_post)
$subject = $_POST['subject'];     // FIXED: should be $_POST (not $_post)
$message = $_POST['message'];

$email_from = 'info@mywebsite.com'; // FIXED: Variable name typo (was $email_form below)

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n". // FIXED: variable name typo (was $Visitor_email)
              "Subject: $subject.\n".
              "User Message: $message.\n";

$to = 'mahawargauranshi@gmail.com'; // FIXED: missing semicolon

$headers = "From: $email_from\r\n"; // FIXED: variable name and corrected quotes
$headers .= "Reply-To: $visitor_email\r\n"; // FIXED: use .= to append to $headers

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html"); // FIXED: space between "Location" and "contact.html"
exit(); // Best practice to call exit after header redirect
?>

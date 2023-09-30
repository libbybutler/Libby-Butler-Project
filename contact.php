<?php
$name = $_Post['name'];
$visitor_email = $_post['email'];
$message = $_POST['message'];

$email_from = 'LibbyButlerProject@outlook.com';

$email_subject ='New Form Submission';

$email_body ="User Name: $name./n".
    "User Email: $visitor_email./n";

$to = "LibbyButlerProject@outlook.com";

$headers ="From" $email_from /r/n";

$headers .="Reply-to: $visitor_email /r/n";

mail($to, $email_subject,$email_body,$headers);

header("Location: contact.html");
?>
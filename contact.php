<?php
if(isset($_POST["submit"])) {
$recipient = "libbybutlerproject@outlook.com"; //my email
echo $subject = 'contact form from Libby Butler Project';
echo $name = $_POST ["yourName"];
echo $email = $_POST["yourEmail"];
echo $message = $_POST["yourMessage"];

 $mailBody="Name: $name\nEmail: $email\n\n$message"; 

 mail($recipient, $subject, $mailBody, "From: $name <$email>");

echo $thankYou="<p>Thank you! We will be in contact with you shortly.</p>";

}
?>


<!-- <?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'LibbyButlerProject@outlook.com';

$email_subject ="New Form Submission";

$email_body ="User Name: $name./n".
    "User Email: $visitor_email./n".
        "User Message: $message./n";

$to = "LibbyButlerProject@outlook.com";

$headers ="From" $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>  -->

function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}



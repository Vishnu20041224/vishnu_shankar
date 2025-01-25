<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_body="User Name:$name .\n".
            "User email:$visitor_email .\n".
            "User subject:$subject  .\n".
            "User message:$message .\n";

$email_from = 'info@rhvishnushankar@gmail.com'

$email_subject ='New From Submission'

$to='rhvishnushankar@gmail.com';

$headers   ="From:$email_from r\n\";
$headers . ="Replay-To:$visitor_email r\n\";

mail($to,$email_subject,$email_body,$headers)

header("Location:contact.html");

?>
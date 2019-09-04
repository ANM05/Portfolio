<?php
 $name = $_POST['name'];
 $user_email = $_POST['email'];
 $message = $_POST['message'];

 $email_from = 'https://anm05.github.io/Portfolio/';
 $email_subject = 'Enquery form submission';

 $email_body = "User name: $name.\n".
                "User email: $user_email.\n".
                  "Message: $message.\n";

 $to = 'antonynganga05@gmail.com';
 
 $headers = "From: $email_from \r\n";
 $headers .= "Reply-To: $user_email \r\n";

 mail($to,$email_subject,$email_body,$headers);

 header("Location: index.html"); 
?>
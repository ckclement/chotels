<?php
$receiver = "clementquorir@gmail.com";
$subject = "Email Test via PHP using Localhost";
$body = "A guest has book a reservation. Test email";
$sender = "kipngetich.c001@gmail.com";

if(mail($receiver, $subject, $body, $sender)){
    //php function send mail
    echo "Email sent successfully to $receiver";
}else{
    echo "sorry, failed while sending mail";
}
?>
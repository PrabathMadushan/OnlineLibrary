<?php

function sendMail($to,$subject,$message){
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <lowastateuniversity8@gmail.com>' . "\r\n";

if(mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    die('Failure: Email was not sent!');
}
}


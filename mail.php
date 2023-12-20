<?php

echo "Request got it";
$mailTo = "noreplay@mygrationhub.com";

$name = $_POST['name'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$body = "From: $name\n E-Mail: $mailFrom\n Message:\n $message";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$mailFrom.'>' . "\r\n";



if (mail ($mailTo, $subject, $body, $headers)) {
    echo '<p>Your message has been sent!</p>';
} else {
    echo '<p>Something went wrong, go back and try again!</p>';
}


?>
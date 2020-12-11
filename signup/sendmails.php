<?php

$to_email = "sabirul.shimul@gmail.com";
$subject = "Simple Email Test Via PHP";
$body = "Hi, This is test email send by php script in 2020 from shimul";
$headers = "From: aborzona@gmail.com";

if(mail($to_email,$subject,$body,$headers)){
    echo "Email successful sent to $to_email";
}else{
    echo "Email sending failed...";
}

?>
<?php

$receiver = "simo.progra@gmail.com";
$subject = "Email de test";
$body = "U're hacked !!!";
$sender = "From:Alamal.hcenter@gmail.com";


if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!"; 
}

?>
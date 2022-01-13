<?php
if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $mail = $_POST['email'];
  $sub = $_POST['subject'];
  $msg = $_POST['message'];

  $receiver = "Alamal.hcenter@gmail.com";
  $subject = "$sub";
  $body = "Hi! my name is $name and my email is $mail i wanna tell you that: $msg";
  $sender = "From:Alamal.hcenter@gmail.com";


  if(mail($receiver, $subject, $body, $sender)){
      header('Location: ../index.php');
      exit();
  }else{
      echo "Sorry, failed while sending mail!"; 
  }
}
?>
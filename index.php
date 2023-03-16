
<?php

// if(isset($_POST['submit'])){ 
    
//     $to = "hafizalihassan22222@gmail.com";
//     $name = $_POST['username']; 
//     $email = $_POST['email'];
//     $subject = $_POST['subject']; 
//     $message = $_POST['message']; 
//     $headers = "From: hafizalihassan22222@gmail.com" . "\r\n" .
//     "CC: hafizalihassan22222@gmail.com";
    
//     mail($to,$subject,$message,$name,$headers);


//   } 
 

//     $email = $_POST['email'];
//     $to = "hafizalihassan22222@gmail.com";
//     $name = $_POST['username']; 
//     $subject = $_POST['subject']; 
//     $message = $_POST['message']; 
//     $headers = "From: $name" . "\r\n" .
//     "\r\n Email:"."$email".
//     "\r\n subject:".$subject
//     "CC: hafizalihassan22222@gmail.com";
    
//     mail($to,$subject,$message,$name,$headers);

// if (mail($to, $subject, $body,$headers)) {
//   echo"Email successfully sent to $to_email....";

// }else {
//   echo"Email sending failed...";
// }



if(!empty($_POST["submit"])){
  $name = $_POST["username"]; 
    $subject = $_POST["subject"]; 
    $message = $_POST["message"];
    $email = $_POST['email'];
    $toEmail= $_POST["hafizalihassan22222@gmail.com"];

    $mailHeaders = "Name: " . $name .
    "\r\n Email: " .$email.
    "\r\n subject: " .$subject.
    "\r\n message: " .$message. "\r\n";

if(email($toEmail, $name, $mailHeaders)){
$message = "your Information is Recevied successfully.";
}
else {
  echo "emial is not receive please try again!";
}
}
?>
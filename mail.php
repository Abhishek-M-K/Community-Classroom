<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$idnumber= $_POST['idnumber'];
$message= $_POST['message'];
$to = "teambabbar@gmail.com";
$subject = "Inquiry Mail From Community Classroom";
$txt ="Name = ". $name . "\r\n  Email = " . $email .  "\r\n  IDnumber = " . $idnumber .  "\r\n Message =" . $message;
$headers = "From: noreply@codeconia.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
<?php

if ($_POST) {


$masterEmail = 'XXXXXXXXXX';	

$emailAddress = $_POST['email'];
$fornMessage =  $_POST['message'];
$fornName = $_POST['name'];
$fornSurname = $_POST['surname'];
$fornPhone = $_POST['phone'];


if(!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)){
//E-mail is not valid
$response = 'invalid';
}else{
//E-mail is valid
$from = 'XXXXXXXXXX'; // sender
$subject = 'Website Contact Form';
$message = "Name: $fornName $fornSurname \nEmail: $emailAddress \nPhone Number: $fornPhone \nMessage: $fornMessage ";
$message = wordwrap($message, 70);

if (mail($masterEmail,$subject,$message,"From: $from\n")) {
$response = 'saved';
}else{
$response = 'email_error';
}


}


}else{
$response = 'email_error';	
}


echo json_encode($response);
?>





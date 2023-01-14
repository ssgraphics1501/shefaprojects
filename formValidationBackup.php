<?php
require_once('class.phpmailer.php');
$name=$organ=$phone=$email=$query=$zone = '';
$nameError=$orgError=$phoneError=$emailError=$queryError=$zoneError = '';

    $simpleText = "~^[a-zA-z\'\s]{2,20}$~";
	$alphanumeric = '/^[a-zA-z0-9,-\/\s]{5,100}$/';
	$emailReg = '/^[a-zA-Z0-9._-]+@[a-z]{2,30}\.[a-z]{2,4}\.{0,1}[a-z]{0,4}$/';
	


if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$organ = $_POST['organ'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$query = $_POST['query'];
	// $zone = $_POST['zone'];

	//$file = $_FILE['attach']['tmp_name'];	
	
	if(empty($name)){
		$nameError = 'Please enter your name';
	}
	
	else{
	if(!preg_match($simpleText,$name)){
		$nameError = 'Not valid Name';
	}
	
	else{
		$name = test_input($name);
	}
	
	}
	
	
		
	
		if(empty($organ)){
		$orgError = 'Please enter your Organisation name';
	}
	
	else{
	if(!preg_match($simpleText,$organ)){
		$orgError = 'Please enter a valid name';
	}
	
	else{
		$organ = test_input($organ);
	}
	}
	
	
	if(empty($phone)){
		$phoneError = 'Please enter your Phone Number';
	}
	
	else{
	if(!preg_match($simpleText,$phone)){
		$phoneError = 'Please enter your correct Phone Number';
	}
	
	else{
		$phone = test_input($phone);
	}
	}
	
	if(empty($email)){
		$emailError = 'Please enter your Email ID';
	}
	
	else{
	if(!preg_match($emailReg,$phone)){
		$emailError = 'Please enter your valid Email ID';
	}
	
	else{
		$email = test_input($email);
	}
		
	}
	
	
	if(empty($query)){
		$queryError = 'Please express your need?';
	}
	

		
	
	$message = 'Name : '.$name.' <br /> Organisation : '.$organ.' <br /> Phone/Mobile : '.$phone.' <br /> Email ID : '.$email.' <br /> Query : '.$query;
try{
$mail = new PHPMailer();
$mail->setFrom($email,$name);
$mail->addAddress('akchopra.shefacnv@gmail.com','Sales Manager');
$mail->addBCC('pramod.dilip@gmail.com','Pramod Kumar Jha');


$mail->addReplyTo($email,$name);
$mail->msgHTML($message);
$mail->Subject = 'Client Enquiry';
$mail->send();
if($mail){
echo 'Mail has been sent';
$name=$org=$phone=$email = '';
$nameError=$orgError=$phoneError=$emailError = '';
}

else{
	echo 'Sorry your mail could not sent';
}

}
catch(phpmailerException $error){
	echo $error->errorMessage();
}
catch(Exception $error){
	echo $error->msgHTML();
}
	
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 



?>
<?php 

	$name=$_POST['name'];
	$email=$_POST['email'];
	$msg=$_POST['message'];

	$sub = 'From LoveActually.';
	

	require 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail->IsSMTP();
	$mail->SMTPDebug = 0;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	$mail->Username = 'Admin_Email';     //Example@gmail.com
	$mail->Password = 'Admin_Password';
	$mail->setFrom('Admin_Email');		 //Example@gmail.com
	$mail->Subject = $sub;
	$mail->Body = $msg;
	$mail->AddAddress('The_Receiver');	 //Example@gmail.com

	if($mail->Send()){
		echo "send";
		header('Location: index.html');
		
		
	}
	else{
		echo "not send";
	}


 ?>
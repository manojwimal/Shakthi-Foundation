<?php

include "classes/class.phpmailer.php";
include "classes/class.smtp.php";
$mail= new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug=1;
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Host="smtp.gmail.com";
$mail->Port=465;//or 465
$mail->isHTML(true);
$mail->Username="shakthifoundation.sll@gmail.com";
$mail->Password="password1@";
$mail->SetFrom("shakthifoundation.sll@gmail.com");
echo "1";
$name=$_POST['txtbox1'];
$hismail=$_POST['txtbox2'];
$sbjt=$_POST['txtbox3'];
$bod=$_POST['txtbox4'];
echo"2";

$mail->Subject=$hismail." ".$name." ".$sbjt;
$mail->Body=$bod;
$txt="shakthifoundation.slll@gmail.com";
$mail->AddAddress($txt);

if(!$mail->Send()){
	echo "Mailer Error:" .$mail->ErrorInfo;
}
else{	header("Location:http://localhost/WebProject/ContactUs.html");

	}
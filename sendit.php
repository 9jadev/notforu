<?php
$to = "ahambasolomon800@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

$send = mail($to,$subject,$txt,$headers);
if($send){
	echo 'Sent';
}else{
	echo 'no it did not';
}
?>
<?php
if(isset($POST['submit'])){

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$text=$_POST['text'];

$to='vikashdeepak2014@gmail.com';
$subject='From querry';
$message="Name: ".$name."\n"."Phone: ".$phone."\n". "Wrote the following: "."\n\n".$msg;
$header="From: ".$email;

if(mail($to,$subject,$message,$header)){
	
	echo "<h1>Sent Successfully! Thank you"."".$name.", We will contact you shortly!</h1>";
	
}
else{
	echo "Something went wrong";
}
}

?>

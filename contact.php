<?php
$name=$_REQUEST['name'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$text=$_REQUEST['text'];

if(empty($name)|| empty($phone) || empty($email) || empty($text))
{
	echo "Please fill all the fields";
}
else
{
	mail("vikashdeepak2014@gmail.com", "Client Querry", $message, "From: $name <
	$email>");
	echo "<script type='text/javascript'>alert('Thanks! we will contact you soon');
	window.open('index.html','_self')
	</script>";
	
}




?>

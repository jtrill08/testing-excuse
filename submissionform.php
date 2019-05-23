 <?php

if(isset($_GET['submit'])) {
	$name=$_GET['name'];
	$subject=$_GET['subject'];
	$mailFrom=$_GET['mail'];
	$message = $_GET['message'];


	$mailTo = "justiciapremo@outlook.com";
	$headers = "From:".$mailFrom;
	$txt = "You have recieved an e-email from ".$name.".\n\n".$message;


	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.html. mailsend");

}

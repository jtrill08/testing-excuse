 <?php

if(isset($_POST['submit'])) {
	$name=$_POST['name'];
	$Excuse=$_POST['Excuse'];


	$mailTo = "justiciapremo@outlook.com";
	$txt = "You have recieved an e-email from; ".$name.".\n\n".$Excuse;


	mail($mailTo,$txt);
	header("Location: submission1.php mailsend");

}

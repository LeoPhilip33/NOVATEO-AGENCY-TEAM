<?php




if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];


	$mailTo = "yoyot32800@gmail.com";
	$headers = "From: ".$mailFrom;
	$text = "Tu as recu un mail de: ".$name.".\n\n".$message;

	mail($mailTo, $subject, $text, $headers);
	header("Location: contact.php?mailsend");
}

?>

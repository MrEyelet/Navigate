<?php

if(isset($_POST['submit'])) {
	$userName = $_POST['username'];
	$userPhone = $_POST['userphone'];
	$userMail = $_POST['usermail'];
	$userCity = $_POST['usercity'];
	$userMsg = $_POST['usermsg'];

	$mailTo = "marcin.adam.mroczko@gmail.com";
	$headers = "From: ".$userName;
	$txt = "You have recieved an e-mail from ".$userMail.".\n\n".$userMsg;


	mail($mailTo, $userPhone, $txt, $headers);
	header("Location: index.php?mailsend");
}

?>
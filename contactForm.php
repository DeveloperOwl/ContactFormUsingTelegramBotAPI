<?php
if(isset($_GET["fullname"]) && isset($_GET["email"]) && isset($_GET["message"])){
	

	//combining fullname, email and message
	$wholeMessage = "->Name: ".$_GET["fullname"]." ->Email: ".$_GET["email"]." ->Message: ".$_GET["message"];
	echo $wholeMessage;
	$data = "https://api.telegram.org/bot199479284:AAGnu34BPQr-hhDOkCGKAB2zO8a-qwcEGy8/sendmessage?chat_id=126445870&text=".$wholeMessage;

	
	$response = file_get_contents($data);
	
	header("Location: http://developerowl.com/contact-us/");
}
else{
	echo "failed!";
}
?>
<?php
if(isset($_GET["fullname"]) && isset($_GET["email"]) && isset($_GET["message"])){
	

	//combining fullname, email and message
	$wholeMessage = "->Name:".$_GET["fullname"]."->Email:".$_GET["email"]."->Message:".$_GET["message"];
	$botTokenG ="199479284:AAGnu34BPQr-hhDOkCGKAB2zO8a-qwcEGy8";
	echo $wholeMessage;
	$apiUrl ="https://api.telegram.org/bot";

	$data = "https://api.telegram.org/bot199479284:AAGnu34BPQr-hhDOkCGKAB2zO8a-qwcEGy8/sendmessage?chat_id=126445870&text=".$wholeMessage;

	header("Location: $data");

	$response1 = file_get_contents("https://api.telegram.org/bot199479284:AAGnu34BPQr-hhDOkCGKAB2zO8a-qwcEGy8/sendmessage?chat_id=126445870&text=".$wholeMessage);
	
	$response = file_get_contents($apiUrl.$botTokenG."/sendmessage?chat_id=126445870&text=".$wholeMessage);
	
	
}
else{
	echo "failed!";
}
?>
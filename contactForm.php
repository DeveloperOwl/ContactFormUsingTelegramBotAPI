<?php
if(isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["message"])){
	

	//combining name, email and message
	$wholeMessage = "Name:".$_GET["name"]."\nEmail:".$_GET["email"]."\nMessage:".$_GET["message"];
	$botTokenG ="124598827:AAHY7RLm7K-dCgdB6qD-f8fBGKnV-G7z0NU";
	
	$apiUrl ="https://api.telegram.org/bot";

	$response = http_get($apiUrl.$botTokenG."/sendmessage?chat_id=99797854&text=".$wholeMessage);
	
	echo $response;
}
?>
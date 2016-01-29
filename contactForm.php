<?php
if(isset($_GET["fullname"]) && isset($_GET["email"]) && isset($_GET["message"])){
	

	//combining fullname, email and message
	$wholeMessage = "#Name:".$_GET["fullname"]."#Email:".$_GET["email"]."#Message:".$_GET["message"];
	$botTokenG ="124598827:AAHY7RLm7K-dCgdB6qD-f8fBGKnV-G7z0NU";
	echo $wholeMessage;
	$apiUrl ="https://api.telegram.org/bot";

	$response = http_get($apiUrl.$botTokenG."/sendmessage?chat_id=99797854&text=".$wholeMessage);
	
	
}
else{
	echo "failed!";
}
?>
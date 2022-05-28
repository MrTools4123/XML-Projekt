<?php 
	$operation = $_GET["op"];
	$xmlFile = simplexml_load_file("users.xml");
	$xmlLocalCopy = new SimpleXMLElement($xmlFile->asXML());
	if($operation == "sendInfo")
	{
		$username = $_GET["username"];
		$password = $_GET["password"];
		$newAcct = $xmlLocalCopy->addChild("user");	
		$newAcct->addChild("username", $username);
		$newAcct->addChild("password", $password);
		$dom = new DOMDocument('1.0');
		$dom->preserveWhiteSpace = false;
		$dom->formatOutput = true;
		$dom->loadXML($xmlLocalCopy->asXML());
		$dom->save("users.xml");
		echo "User Created.";
	}	
?>
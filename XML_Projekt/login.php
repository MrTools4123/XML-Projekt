<?php 
	$operation = $_GET["op"];
	$xmlFile = simplexml_load_file("users.xml"); 			
	$xmlLocalCopy = new SimpleXMLElement($xmlFile->asXML()); 
	if($operation == "login")
	{
	$username = $_GET["username"];
	$password = $_GET["password"];
		foreach ($xmlLocalCopy as $user) 
			{ 
			   $name = $user->username;
			   $pass = $user->password;
			   if($username == $name && $password == $pass)
				{
				echo "Success%index.html"; 
				}
			}
	}
	else
	{
		echo "Failed."; 
	}
?>
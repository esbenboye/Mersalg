<?php
header('Cache-Control: no-cache');
include_once("php/functions.php");


if(isset($_POST["action"])) // Hvis der laves en permission eller et salg
{
	connect();
	
	$type 	= getPost("type");
	$action = getPost("action");
	$owner 	= getPost("owner");
	
	$dato 	= currentDate();
	
	$sql = "UPDATE `salg` SET `$type`=`$type`+($action) WHERE `dato`='$dato' AND `owner`='$owner'";

	$res = mysql_query($sql) or die(mysql_error());
	
	if(mysql_affected_rows()==0) // Hvis der ikke er noget der er opdateret, skal der indsættes en ny række
	{
		$sql = "INSERT INTO `salg`(`dato`,`owner`,`$type`) VALUES('$dato','$owner',1)";
		mysql_query($sql) or die(mysql_error());
	}
}

elseif(isset($_POST["owner"])) // Hvis der skal hentes info om nuværende salg/permission
{
	connect();
	
	$user = getPost("owner");
	$dato = currentDate();
	$sql = "SELECT * FROM `salg` WHERE `owner` = '$user' and `dato` = '$dato'";
	
	$res = mysql_query($sql);
	echo json_encode(mysql_fetch_assoc($res));
}

else
{
	$data = array(
		"error"=>"Der mangler en eller flere parametere."
		
		);
	echo json_encode($data);
}





?>
<?php

function connect()
{
	mysql_connect("","","");
	mysql_select_db("");
}

function getAllStats($owner)
{
	$dato = currentDate();
	$sql = "SELECT * FROM `salg` WHERE `dato`<>'$dato' AND `owner`='$owner'";
	$res = mysql_query($sql);
	return $res;
}

function currentDate()
{
	return date("Y-m-d");
}

function getPost($varName)
{
	$returnValue = "";	
	if(isset($_POST["$varName"]))
	{
		$returnValue = $_POST["$varName"];
		$returnValue = mysql_real_escape_string($returnValue) or die(mysql_error());
	}
	
	return $returnValue==""?false:$returnValue;
}


?>
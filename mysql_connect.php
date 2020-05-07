<?php
	/**********MYSQL Settings****************/
	$host="localhost";
	$db_name="blood_bank";
	$user="root";
	$pass="";
	/**********MYSQL Settings****************/
	$conn=mysql_connect($host,$user,$pass);
	if($conn)
	{
	$db_selected = mysql_select_db($db_name, $conn);
	if (!$db_selected) {
	    die ('Can\'t use foo : ' . mysql_error());
	}
	}
	else
	{
	    die('Not connected : ' . mysql_error());
	
	}

	
	?>
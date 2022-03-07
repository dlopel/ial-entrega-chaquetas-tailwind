<?php
	define("DB_SERVER","localhost");
	define("DB_USER","ial_landing");
	define("DB_PASSWORD","Pauhomi09*Feria");
	define("DB_DATABASE","ial_dblanding");

	//define("DB_SERVER","localhost");
	//define("DB_USER","root");
	//define("DB_PASSWORD","");
	//define("DB_DATABASE","ial_dblanding_dev");

	function db_connect()
	{
		$result = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
	   
		if (!$result)
			return false;
		if (!mysqli_select_db($result,DB_DATABASE))
			return false;
		return $result;
	}
?>
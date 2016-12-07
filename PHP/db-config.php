<?php
define('DB_SERVER', '');   // DB host

define('DB_USERNAME', '');    // DB username

define('DB_PASSWORD', '');    // DB password

define('DB_DATABASE', 'apollo_sugar');      // DB name

function connect_db()
{
	$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE) or die( "Unable to connect");
	if (mysqli_connect_errno($connect))
	{
		echo "Failed to connect to MySQL:" . mysqli_connect_error();
	}
  else
  {
		//	echo "Connected";
  }
	return $connect;
}
?>

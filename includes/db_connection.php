<?php
	define("DB_SERVER", "localhost");
	define("DB_USER", "rafay");
	define("DB_PASS", "checkmate");
	define("DB_NAME", "the_royal_palm");
	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	if(mysqli_connect_errno())
	{
		die("Database connection failed" . mysqli_connect_error(). "(" . mysqli_connect_errno() . ")");
	}
?>
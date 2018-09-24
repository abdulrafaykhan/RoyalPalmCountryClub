<?php	require_once("../../includes/db_connection.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	require_once("../../includes/session.php"); ?>
<?php

	if(isset($_POST['submit']))
	{
		 echo $admin_username = mysqli_prep(string_prep($_POST["admin_username"]));
		 $password = mysqli_prep(string_prep($_POST["password"]));
		 echo "<br >";
		$found_admin = attempt_login_admin($admin_username, $password);
		if($found_admin)
		{
			//Success
			$_SESSION["username"] = $found_admin["USERNAME"];
			redirect_to("admin_area.php");
		}
		else
		{
			$_SESSION["message"] = "Username/Password is incorrect";
			redirect_to("admin_login.php");
			
		}
		
		
	}
?>
<?php
	require_once("../../includes/db_conn_close.php");
?>
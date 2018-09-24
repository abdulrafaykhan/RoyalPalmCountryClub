<?php	require_once("../../includes/db_connection.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	require_once("../../includes/session.php"); ?>
<?php

	if(isset($_POST['submit']))
	{
		 $mem_id = mysqli_prep(string_prep($_POST["member_id"]));
		 $password = mysqli_prep(string_prep($_POST["password"]));
		$found_member = attempt_login_member($mem_id, $password);
		if($found_member)
		{
			//Success
			$_SESSION["member_id"] = $found_member["MEMBER_ID"];
			redirect_to("member_area.php");
		}
		else
		{
			$_SESSION["message"] = "Username/Password is incorrect";
			redirect_to("mem_login.php");
		}
	}
?>
<?php
	require_once("../../includes/db_conn_close.php");
?>
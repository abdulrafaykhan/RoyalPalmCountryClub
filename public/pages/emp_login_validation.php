<?php	require_once("../../includes/db_connection.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	require_once("../../includes/session.php"); ?>
<?php

	if(isset($_POST['submit']))
	{
		 $emp_id = mysqli_prep(string_prep($_POST["employee_id"]));
		 $password = mysqli_prep(string_prep($_POST["password"]));
		$found_employee = attempt_login_employee($emp_id, $password);
		if($found_employee)
		{
			//Success
			$_SESSION["employee_id"] = $found_employee["EMPLOYEE_ID"];
			//echo $_SESSION["employee_id"];
			
			redirect_to("employee_area.php");
		}
		else
		{
			$_SESSION["message"] = "Username/Password is incorrect";
			redirect_to("employee_login.php");
			
		}
	}
?>
<?php
	require_once("../../includes/db_conn_close.php");
?>
<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php
	/*if(logged_in_member())
	{
		$_SESSION["member_id"] = null;
		redirect_to("../index.php");
	}
	elseif(logged_in_employee())
	{
		$_SESSION["employee_id"] = null;
		redirect_to("../index.php");
	}
	elseif(logged_in_admin())
	{
		$_SESSION["username"] = null;
		redirect_to("../index.php");
	}*/
	
	//This completely destroys the SESSION!
	//Please use with caution
	
	session_start();
	$_SESSION = array();
	if(isset($_COOKIE[session_name()]))
	{
		setcookie(session_name(), "", time()-42000, "/");
	}
	session_destroy();
	redirect_to("../index.php");
?>

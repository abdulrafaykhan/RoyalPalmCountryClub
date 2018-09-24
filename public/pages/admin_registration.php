<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	require_once("../../includes/db_connection.php"); ?>
<?php	//confirm_logged_in_admin(); ?>


<?php 
	$adminid=0;
	if(isset($_POST["submit"]))
	{		
		if($_POST["adminpassword"] === $_POST["confirmpassword"])
		{
		$adminusername = mysqli_prep(string_prep($_POST["adminusername"]));
		$adminpassword = password_encrypt($_POST["adminpassword"]);
		$employee_id = mysqli_prep(string_prep($_POST["employeeid"]));
		$query1 = "INSERT INTO admins (USERNAME, PASSWORD, EMPLOYEE_ID) VALUES ('{$adminusername}', '{$adminpassword}', {$employee_id})";
		$result1 = mysqli_query($connection, $query1);
		if($result1)
		{
			$_SESSION["message"] = "Your registration was successful!";
			redirect_to("admin_login.php?adminid={$adminid}");
		}
		else
		{
			$_SESSION["message"] = "Something went wrong. Please reenter!";
			redirect_to("enter_admin.php");
		}
		}
		else
		{
			$_SESSION["message"] = "The passwords don't match! Please reenter!";
			redirect_to("enter_admin.php");

		}
	}
	else
	{
		redirect_to("admin_area.php");
	}
		
?>
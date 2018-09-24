<?php	require_once("../../includes/functions.php"); ?>	
<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/db_connection.php"); ?>

<?php
		if($_POST["password"] === $_POST["confirmpassword"])
		{
			$password =password_encrypt($_POST["password"]);
			$id  = $_POST["employee_id"];
			$query = "UPDATE employee_login SET PASSWORD = '{$password}' WHERE EMPLOYEE_ID = {$id} LIMIT 1";
			$result =mysqli_query($connection, $query);
			if($result)
			{
				redirect_to("employee_area.php?employee_id={$id}");

			}
			else
			{
				$_SESSION["message"] = "Something went wrong. Please re-enter the password!";
				redirect_to("password_update.php");
			}
		}
		else
		{
			$_SESSION['message'] = "The passwords don't match! Please re-enter";
			redirect_to("password_update.php");
		}
?>
<?php	require_once("../../includes/db_conn_close.php"); ?>

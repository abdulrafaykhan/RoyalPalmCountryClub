<?php	require_once("../../includes/functions.php"); ?>	
<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/db_connection.php"); ?>

<?php
		if($_POST["password"] === $_POST["confirmpassword"])
		{
			$password =password_encrypt($_POST["password"]);
			$id  = $_POST["employee_id"];
			$query = "INSERT INTO employee_login(EMPLOYEE_ID, PASSWORD) VALUES ({$id}, '{$password}')";
			$result =mysqli_query($connection, $query);
			if($result)
			{
				redirect_to("successful_registration.php?member_id={$id}");

			}
			else
			{
				$_SESSION["message"] = "Something went wrong. Please re-enter the password!";
				redirect_to("password_selection.php");
			}
		}
		else
		{
			$_SESSION['message'] = "The passwords don't match! Please re-enter";
			redirect_to("password_selection.php");
		}
?>
<?php	require_once("../../includes/db_conn_close.php"); ?>

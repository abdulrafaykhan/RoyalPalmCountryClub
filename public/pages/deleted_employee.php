<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	require_once("../../includes/db_connection.php"); ?>
<?php	confirm_logged_in_employee(); ?>

<?php
	if(isset($_SESSION["employee_id"]))
	{
		$employee_id = $_SESSION["employee_id"];
	}
	else
	{
		$employee_id = $_GET["employee_id"];
	}
	$query = "DELETE FROM employee_contacts WHERE ID = {$employee_id}";
	$result = mysqli_query($connection, $query);
	if($result)
	{
		$query2 = "DELETE FROM employee_login WHERE EMPLOYEE_ID = {$employee_id}";
		$result2 = mysqli_query($connection, $query2);
		
		if($result2)
		{
				$query0 = "SELECT JOB FROM employees WHERE ID = {$employee_id}";
				$result0 = mysqli_query($connection, $query0);
				while($row0 = mysqli_fetch_assoc($result0))
				{
					$type = $row0["JOB"];
				}
				if($type == "TRAINER")
				{
					$query3 = "DELETE FROM employees WHERE ID = {$employee_id}";
					$result3 = mysqli_query($connection, $query3);
					if($result3)
					{
						$query4 = "DELETE FROM activities WHERE TRAINER_ID = {$employee_id}";
						$result4 = mysqli_query($connection, $query4);
						if($result4)
						{
							$_SESSION["employee_id"] = null;
							redirect_to("../index.php");
						}
						else
						{
							$_SESSION["message"] = "Something went wrong. Please retry";
							redirect_to("delete_employee.php");
						}
					}
				}
				$query3 = "DELETE FROM employees WHERE ID = {$employee_id} LIMIT 1";
				$result3 = mysqli_query($connection, $query3);
				if($result3)
				{
							$_SESSION["employee_id"] = null;
							redirect_to("../index.php");
				}
				else
				{
						$_SESSION["message"] = "Something went wrong. Please retry";
						redirect_to("delete_employee.php");
				}


		}
	}

?>
<?php	require_once("../../includes/db_conn_close.php"); ?>
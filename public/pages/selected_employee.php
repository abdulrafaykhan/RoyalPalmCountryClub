<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	confirm_logged_in_admin(); ?>

<?php
	if(isset($_POST["submit"]))
	{
			$employee_id = $_POST["employee_id"];
			$id = $_GET["id"];
		if($id == 1)
		{

			redirect_to("view_information_emp.php?employeeid={$employee_id}");
		
		}
		elseif($id == 2)
		{
			redirect_to("delete_employee.php?employeeid={$employee_id}");
		}
	}
	else
	{
		redirect_to("select_employee.php?id={$id}");
	}
?>
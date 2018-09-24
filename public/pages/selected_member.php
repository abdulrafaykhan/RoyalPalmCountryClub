<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	confirm_logged_in_admin(); ?>

<?php
	if(isset($_POST["submit"]))
	{
		$id = $_GET["id"];
		$member_id = $_POST["member_id"];
		if($id == 1)
		{
			redirect_to("view_information.php?memberid={$member_id}");
		}
		elseif($id == 2)
		{
			redirect_to("delete_member.php?memberid={$member_id}");
		}
	}
	else
	{
		$_SESSION["message"] = "Please select a member first!";
		redirect_to("select_member.php");
	}
		
?>
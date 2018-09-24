<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	require_once("../../includes/db_connection.php"); ?>
<?php	confirm_logged_in_member(); ?>


<?php
	if($_POST["submit"])
	{
		$member_id = $_SESSION["member_id"];
		$cost = 0;
		$query = "SELECT NAME FROM activities";
		$result = mysqli_query($connection, $query);
		while($row = mysqli_fetch_assoc($result))
		{
			$activity = strtolower($row["NAME"]);
			if(array_key_exists($activity, $_POST))
				{
					$query2 = "SELECT COST_PER_MONTH FROM activities WHERE NAME = '{$activity}' LIMIT 1";
					$result2 = mysqli_query($connection, $query2);
					while($row2 = mysqli_fetch_assoc($result2))
					{
						$costpermonth = $row2["COST_PER_MONTH"];
						$cost += $costpermonth;
					}
					$query3 = "SELECT ID FROM activities WHERE NAME = '{$activity}' LIMIT 1";
					$result3 = mysqli_query($connection, $query3);
					while($row3 = mysqli_fetch_assoc($result3))
					{
						$activity_id = $row3["ID"];
						$query4 = "INSERT INTO involved_in(MEMBER_ID, ACTIVITY_ID) VALUES ({$member_id}, {$activity_id})";
						$result4 = mysqli_query($connection, $query4);
						if(!$result4)
						{
							break;
							$_SESSION["message"]  = "Your activities were not successfully registered!";
							redirect_to("select_activities.php");
						}
					}
				}
		}
		$query5 = "UPDATE members SET COST_PER_MONTH='{$cost}' WHERE ID={$member_id}";
		$result5= mysqli_query($connection, $query5);
		if($result5)
		{
			$_SESSION["message"] = "Your activities were recorded successfully!";
			redirect_to("member_area.php?member_id={$member_id}");
		}
		else
		{
			$_SESSION["message"] = "Something went wrong. Please re-enter the activities";
			redirect_to("select_activities.php");
		}
		
	}
	else 
	{
		$_SESSION["message"] = "Please enter any actitivites first!";
		redirect_to("select_activities.php");
	}


	?>

<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	require_once("../../includes/db_connection.php"); ?>
<?php	confirm_logged_in_member(); ?>

<?php
	if(isset($_SESSION["member_id"]))
	{
		$member_id = $_SESSION["member_id"];
	}
	else
	{
		$member_id = $_GET["member_id"];
	}
	$query0 = "SELECT TYPE FROM members WHERE ID = {$member_id}";
	$result0 = mysqli_query($connection, $query0);
	while($row0 = mysqli_fetch_assoc($result0))
	{
		$member_type = $row0["TYPE"];
	}
	if($member_type == "REG")
	{
		$query = "DELETE FROM member_contacts WHERE ID = {$member_id}";
		$result = mysqli_query($connection, $query);
		if($result)
		{
			$query2 = "DELETE FROM involved_in WHERE MEMBER_ID = {$member_id}";
			$result2 = mysqli_query($connection, $query2);
			if($result2)
			{
				$query3 = "DELETE FROM logins WHERE MEMBER_ID = {$member_id} LIMIT 1";
				$result3 = mysqli_query($connection, $query3);
				if($result3)
				{
					$query4 = "DELETE FROM members WHERE ID = {$member_id} LIMIT 1";
					$result4 = mysqli_query($connection, $query4);
					if($result4)
					{
						$_SESSION["member_id"] = null;
						redirect_to("../index.php");
					}

				}
				
			}

		}
	}
	
	if($member_type = "PRV")
	{
		$query = "DELETE FROM member_contacts WHERE ID = {$member_id}";
		$result = mysqli_query($connection, $query);
		if($result)
		{
			$query2 = "DELETE FROM involved_in WHERE MEMBER_ID = {$member_id}";
			$result2 = mysqli_query($connection, $query2);
			if($result2)
			{
				$query3 = "DELETE FROM logins WHERE MEMBER_ID = {$member_id} LIMIT 1";
				$result3 = mysqli_query($connection, $query3);
				if($result3)
				{
					$query4 = "DELETE FROM members WHERE ID = {$member_id} LIMIT 1";
					$result4 = mysqli_query($connection, $query4);
					if($result4)
					{
						$query5 = "SELECT ROOM_ID FROM rents WHERE MEMBER_ID = {$member_id}";
						$result5 = mysqli_query($connection, $query5);
						while($row5 = mysqli_fetch_assoc($result5))
						{
							$room_no = $row5["ROOM_ID"];
						}
						if(isset($room_no))
						{
							$query6 = "DELETE FROM rents WHERE MEMBER_ID = {$member_id}";
							$result6 = mysqli_query($connection, $query6);
							if($result6)
							{
								$query7 = "UPDATE rooms SET STATUS = 'A' WHERE ROOM_NO = {$room_no} LIMIT 1";
								$result7 = mysqli_query($connection, $query7);
								if($result7)
								{
									$_SESSION["member_id"] = null;
									redirect_to("../index.php");
								}
							}
						}
						else
						{
									$_SESSION["member_id"] = null;
									redirect_to("../index.php");
						}

						}

					}

				}
				
			}

		}


	else
	{
		$_SESSION["message"] = "Something went wrong. Please retry!";
		redirect_to("delete_member.php");
	}
?>
<?php	require_once("../../includes/db_conn_close.php"); ?>
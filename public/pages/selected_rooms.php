<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	require_once("../../includes/db_connection.php"); ?>
<?php	confirm_logged_in_member(); ?>

<?php
	if($_POST["submit"])
	{
		//Process the form
		$member_id = $_SESSION["member_id"];
		if($_POST["type"] == 1)
		{
			$type = "EXECUTIVE SUITE";
		}
		if($_POST["type"] == 2)
		{
			$type = "SUPERIOR CLUB SUITE";
		}
		if($_POST["type"] == 3)
		{
			$type = "KICHNETTE SUITE";
		}
		if($_POST["type"] == 4)
		{
			$type = "FAMILY SUITE";
		}
		if($_POST["type"] == 5)
		{
			$type = "KING SUITE";
		}
		if($_POST["type"] == 6)
		{
			$type = "STUDIO SUITE";
		}
		if($_POST["type"] == 7)
		{
			$type = "TWO BEDROOM APARTMENT";
		}
		if($_POST["type"] == 8)
		{
			$type = "THREE BEDROOM APARTMENT";
		}
		echo $fromdate =$_POST["fromdate"];
		echo $tilldate = $_POST["tilldate"];
		if($fromdate < date('d-m-Y') || $tilldate < date('d-m-Y'))
		{
			$_SESSION["message"] = "Invalid Dates!";
			//redirect_to("book_rooms.php");
		}
		//Now selecting a room that is of the selected type and is available
		$query1 = "SELECT ROOM_NO FROM rooms WHERE TYPE = '{$type}' AND STATUS = 'A' LIMIT 1";
		$result1 = mysqli_query($connection, $query1);
		while($row1 = mysqli_fetch_assoc($result1))
		{
			$room_no = $row1["ROOM_NO"];
		}
		if(isset($member_id) && isset($type))
		{
			if(isset($fromdate) && isset($tilldate))
			{
				if(isset($room_no))
				{
					$query2 = "INSERT INTO rents (MEMBER_ID, ROOM_ID, FROM_DATE, TILL_DATE) VALUES ({$member_id}, {$room_no}, STR_TO_DATE('{$fromdate}','%Y-%m-%d'), STR_TO_DATE('{$tilldate}','%Y-%m-%d'))";
					$result2 = mysqli_query($connection, $query2);
					if($result2)
					{
						$query3 = "UPDATE rooms SET STATUS = 'N/A' WHERE ROOM_NO = {$room_no}";
						$result3 = mysqli_query($connection, $query3);
						if($result3)
						{
						  $_SESSION["message"] = "Your room was booked successfully!";
						  redirect_to("member_area.php?member_id={$member_id}");
						}

					}
					else
					{
						$_SESSION["message"] = "Something went wrong. Please try again!";
						echo mysqli_error($connection);
						//redirect_to("book_rooms.php?member_id={$member_id}");
						
					}
				}
				else
				{
					$_SESSION["message"] = "Your room no is not correct. Please reenter!";
					redirect_to("book_rooms.php?member_id={$member_id}");
				}
			}
			else
			{
				$_SESSION["message"] = "Your dates are not correct. Please reenter!";
				redirect_to("book_rooms.php?member_id={$member_id}");
			}
		}
		else
		{
				$_SESSION["message"] = "Your Member ID or Room Type is not correct. Please reenter!";
				redirect_to("book_rooms.php?member_id={$member_id}");
		}
	}
	else
	{
		redirect_to("book_rooms");
	}
?>
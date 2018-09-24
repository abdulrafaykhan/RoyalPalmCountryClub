<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	require_once("../../includes/db_connection.php"); ?>
<?php confirm_logged_in_member(); ?>
<!DOCTYPE html>

<html>
<link rel = "stylesheet" href = "../stylesheets/view_information_styling.css">
<head>

<title>Members' Area</title>
<?php
	if(logged_in_member() || logged_in_admin())
	{
		
	?>
<a href = "logout.php" style = "float : right; top 0;">Logout</a>
<?php
	}
?>
<p style = "text-align: center;"><?php
	if(isset($_SESSION['message']))
	{
		echo $_SESSION['message'];
	}

?></p>
</head>

<body>

<h1>Members' Information</h1>
<?php	
	if(logged_in_member())
	{
		include_once("../../includes/layouts/navbar_member.php");
	}
	elseif(logged_in_admin())
	{
		include_once("../../includes/layouts/navbar_admin.php"); 
	}
 ?>
<br>
<!--<img src = "../images/member_area.jpg" alt = "Enjoy a luxurious living at The Royal Palm" height = "100%" width = "100%" style = "border = 2px solid black;"/>-->
<br>
<?php
	$member_id;
	$member_type;
	//Assigning Member ID
	if(isset($_SESSION["member_id"]))
	{
		$member_id = $_SESSION["member_id"];
	}
	else
	{
			$member_id = $_GET["memberid"];
	}
	//Assigning Member Type
	if(isset($_SESSION["member_type"]))
	{
			$member_type = $_SESSION["member_type"];
	}
	else
	{
		$query0 = "SELECT TYPE FROM members WHERE ID = {$member_id}";
		$result0 = mysqli_query($connection, $query0);
		while($row0 = mysqli_fetch_assoc($result0))
		{
			$member_type = $row0["TYPE"];
		}			
	}
	if(!isset($member_id) && !isset($member_type))
	{
		$_SESSION["message"] = "Invalid Member";
		redirect_to("select_member.php");
	}
	if($member_type == "REG")
	{
			$query = "SELECT * FROM member_regular WHERE ID = {$member_id} ";
			$result = mysqli_query($connection, $query);
			while($row = mysqli_fetch_assoc($result))
			{
				$id = $row["ID"];
				$fname = ucfirst(strtolower($row["FNAME"]));
				$lname = ucfirst(strtolower($row["LNAME"]));
				$cnic_no = $row["CNIC_NO"];
				$house_no = $row["HOUSE_NO"];
				$block = $row["BLOCK"];
				$area = ucfirst(strtolower($row["AREA"]));
				$city  = ucfirst(strtolower($row["CITY"]));
				$country = ucfirst(strtolower($row["COUNTRY"]));
				$email = $row["EMAIL"];
				$gender = ucfirst(strtolower($row["GENDER"]));
				$card_no = $row["CARD_NO"];
				$date_of_joining = $row["DATE_OF_JOINING"];
				$cost_per_month = $row["COST_PER_MONTH"];
				if(!isset($contact_no1))
				{
					$contact_no1 = $row["CONTACT_NO"];
					continue;
				}
				elseif(!isset($contact_no2))
				{
					$contact_no2 = $row["CONTACT_NO"];
				}
			}
				
?>
<?php
	if($gender == "Male")
	{
?>
<h1>
<?php	
	echo "Mr. " . $fname . " " . $lname;
	}
	elseif($gender == "Female")
	{
?>
<h1>
<?php
	echo "Mrs./Ms. " . $fname . " " . $lname;
	}
?>
</h1>
<hr>
<h2>If case of any inconsistencies, please update the valid information and press "Submit". Also note that Member ID is a uniquely assigned to each member by the Club. It cannot be changed under any circumstances!</h2>

	<form action = "update_information.php" method = "post">
	<fieldset>
<table>
	<legend>Your Info</legend>
	<tr>
		<td>ID:</td>
		<td><input type = "number" name = "member_id" value = "<?php echo $id; ?>"></td>
	</tr>
	<tr>
		<td>First Name:</td>
		<td><input type="text" name="firstname" value="<?php echo $fname; ?>"/></td>
	</tr>
		<tr>
		<td>Last Name:</td>
		<td><input type="text" name="lastname" value="<?php echo $lname; ?>"/></td>
	</tr>
	<tr>
		<td>CNIC Number:</td>
		<td><input type="number" name="cnicno" value="<?php echo $cnic_no; ?>"/></td>
	</tr>
	<tr>
		<td>House Number:</td>
		<td><input type="number" name="houseno" value="<?php echo $house_no; ?>"/></td>
	</tr>
		<tr>
		<td>Block</td>
		<td><input type="text" name="block" value="<?php echo $block; ?>"/></td>
	</tr>
		<tr>
		<td>Area:</td>
		<td><input type="text" name="area" value="<?php echo $area; ?>"/></td>
	</tr>
		<tr>
		<td>City:</td>
		<td><input type="text" name="city" value="<?php echo $city; ?>"/></td>
	</tr>
		<tr>
		<td>Country:</td>
		<td><input type="text" name="country" value="<?php echo $country; ?>"/></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo $email; ?>"/></td>
	</tr>
	<tr>
		<td>Gender:</td>
		<?php if($gender == "Male") 
		{
		?>
		<td><input type="radio" name="gender" value="male" checked />Male</p>
		<input type="radio" name="gender" value="female"/>Female</p></td>
		<?php 
		}
		elseif($gender == "Female")
		{
		?>
		<td><input type="radio" name="gender" value="male" />Male</p>
		<input type="radio" name="gender" value="female" checked />Female</p></td>
		<?php
		}
		?>
	</tr>
		<td>Credit/Debit Card Number:</td>
		<td><input type="number" name="cardno" value="<?php echo $card_no; ?>"/></td>
	</tr>
	<tr>
		<td>Date of Joining:</td>
		<td><input type="date" name="joindate" value="<?php echo $date_of_joining; ?>"/></td>
	</tr>
	<tr>
		<td>Cost Per Month:</td>
		<td><input type="number" name="cost_per_month" value="<?php echo $cost_per_month; ?>" readonly></input></td>
	</tr>
		<?php if(isset($contact_no1) && isset($contact_no2))
	{
		?>
	<tr>
		<td>Contact Number 1:</td>
		<td><input type="number" name="contactno1" value="<?php echo $contact_no1; ?>"/></td>
	</tr>
		<tr>
		<td>Contact Number 2:</td>
		<td><input type="number" name="contactno2" value="<?php echo $contact_no2; ?>"/></td>
	</tr>
	<?php 
	}
	elseif (!isset($contact_no1))
		{
			$contact_no1 = NULL;
		?>
	<tr>
		<td>Contact Number 1:</td>
		<td><input type="number" name="contactno1" value="<?php echo $contact_no1; ?>"/></td>
	</tr>
		<tr>
		<td>Contact Number 2:</td>
		<td><input type="number" name="contactno2" value="<?php echo $contact_no2; ?>"/></td>
	</tr>
	<?php
		} 
	elseif (!isset($contact_no2))
		{
			$contact_no2 = null;
		?>	
	<tr>
		<td>Contact Number 1:</td>
		<td><input type="number" name="contactno1" value="<?php echo $contact_no1; ?>"/></td>
	</tr>
		<tr>
		<td>Contact Number 2:</td>
		<td><input type="number" name="contactno2" value="<?php echo $contact_no2; ?>"/></td>
	</tr>
		<?php
		}
		?>
	</table>
	</fieldset>
	<br>
		<input type="submit" name="submit" value="Submit" style = "float : right;"/>
		<br>
</form>
<?php
			}
			elseif($member_type == "PRV")
			{
				$query = "SELECT * FROM member_privileged WHERE ID = {$member_id} ";
				$result = mysqli_query($connection, $query);
				while($row = mysqli_fetch_assoc($result))
				{
					$id = $row["ID"];
					$fname = ucwords(strtolower($row["FNAME"]));
					$lname = ucwords(strtolower($row["LNAME"]));
					$cnic_no = $row["CNIC_NO"];
					$house_no =  $row["HOUSE_NO"];
					$block = $row["BLOCK"];
					$area = ucwords(strtolower($row["AREA"]));
					$city = ucfirst(strtolower($row["CITY"]));
					$country = ucwords(strtolower($row["COUNTRY"]));
					$email = $row["EMAIL"];
					$gender = ucfirst(strtolower($row["GENDER"]));
					$card_no = $row["CARD_NO"];
					$date_of_joining = $row["DATE_OF_JOINING"];
					$monthly_installments =  $row["MONTHLY_INSTALLMENTS"] ;
					$payment_status = $row["PAYMENT_STATUS"];
					if(!isset($contact_no1))
					{
						$contact_no1 = $row["CONTACT_NO"];
						continue;
					}
					elseif(!isset($contact_no2))
					{
						$contact_no2 = $row["CONTACT_NO"];
					}
				}
	?>
<?php
	if($gender == "Male")
	{
?>
<h1>
<?php	
	echo "Mr. " . $fname . " " . $lname;
	}
	elseif($gender == "Female")
	{
?>
<h1>
<?php
	echo "Mrs./Ms. " . $fname . " " . $lname;
	}
?>
</h1>
<hr>
<h2>If case of any inconsistencies, please update the valid information and press "Submit". Also note that Member ID is a uniquely assigned to each member by the Club. It cannot be changed under any circumstances!</h2>

	<form action = "update_information.php" method = "post">
	<fieldset>
<table>
	<legend>Your Info :</legend>
	<tr>
		<td>ID:</td>
		<td><input type = "number" name = "member_id" value = "<?php echo $id; ?>"></td>
	</tr>
	<tr>
		<td>First Name:</td>
		<td><input type="text" name="firstname" value="<?php echo $fname; ?>"/></td>
	</tr>
		<tr>
		<td>Last Name:</td>
		<td><input type="text" name="lastname" value="<?php echo $lname; ?>"/></td>
	</tr>
	<tr>
		<td>CNIC Number:</td>
		<td><input type="number" name="cnicno" value="<?php echo $cnic_no; ?>"/></td>
	</tr>
	<tr>
		<td>House Number:</td>
		<td><input type="number" name="houseno" value="<?php echo $house_no; ?>"/></td>
	</tr>
		<tr>
		<td>Block</td>
		<td><input type="text" name="block" value="<?php echo $block; ?>"/></td>
	</tr>
		<tr>
		<td>Area:</td>
		<td><input type="text" name="area" value="<?php echo $area; ?>"/></td>
	</tr>
		<tr>
		<td>City:</td>
		<td><input type="text" name="city" value="<?php echo $city; ?>"/></td>
	</tr>
		<tr>
		<td>Country:</td>
		<td><input type="text" name="country" value="<?php echo $country; ?>"/></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo $email; ?>"/></td>
	</tr>
	<tr>
		<td>Gender:</td>
		<?php if($gender == "Male") 
		{
		?>
		<td><input type="radio" name="gender" value="male" checked />Male</p>
		<input type="radio" name="gender" value="female"/>Female</p></td>
		<?php 
		}
		elseif($gender == "Female")
		{
		?>
		<td><input type="radio" name="gender" value="male" />Male</p>
		<input type="radio" name="gender" value="female" checked />Female</p></td>
		<?php
		}
		?>
	</tr>
		<td>Credit/Debit Card Number:</td>
		<td><input type="number" name="cardno" value="<?php echo $card_no; ?>"/></td>
	</tr>
	<tr>
		<td>Date of Joining:</td>
		<td><input type="date" name="joindate" value="<?php echo $date_of_joining; ?>"/></td>
	</tr>
	<tr>
		<td>Monthly Installments:</td>
		<td>		
			
			<?php if($monthly_installments == "30000")
			{
				?>
			<select name = "monthlyinstallments">
			<option value = "1" selected>Rs. 30,000/= per month</option>
			<option value =  "2">Rs. 40,000/= per month</option>
			<option value = "3">Rs. 50,000/= per month</option>
			<option value = "4">Rs. 60,000/= per month</option>
			<option value = "5">Rs. 70,000/= per month</option>
		</select>
		<?php
			}
			elseif($monthly_installments == "40000")
			{
			?>
			<select name = "monthlyinstallments">
			<option value = "1">Rs. 30,000/= per month</option>
			<option value =  "2" selected>Rs. 40,000/= per month</option>
			<option value = "3">Rs. 50,000/= per month</option>
			<option value = "4">Rs. 60,000/= per month</option>
			<option value = "5">Rs. 70,000/= per month</option>
		</select>
		<?php
			}
			elseif($monthly_installments == "50000")
			{
			?>
			<select name = "monthlyinstallments">
			<option value = "1">Rs. 30,000/= per month</option>
			<option value =  "2">Rs. 40,000/= per month</option>
			<option value = "3" selected>Rs. 50,000/= per month</option>
			<option value = "4">Rs. 60,000/= per month</option>
			<option value = "5">Rs. 70,000/= per month</option>
		</select>
		<?php
			}
			elseif($monthly_installments == "60000")
			{
			?>
			<select name = "monthlyinstallments">
			<option value = "1">Rs. 30,000/= per month</option>
			<option value =  "2">Rs. 40,000/= per month</option>
			<option value = "3">Rs. 50,000/= per month</option>
			<option value = "4" selected>Rs. 60,000/= per month</option>
			<option value = "5">Rs. 70,000/= per month</option>
		</select>
		<?php
			}
			elseif($monthly_installments == "70000")
			{
			?>
			<select name = "monthlyinstallments">
			<option value = "1">Rs. 30,000/= per month</option>
			<option value =  "2">Rs. 40,000/= per month</option>
			<option value = "3">Rs. 50,000/= per month</option>
			<option value = "4">Rs. 60,000/= per month</option>
			<option value = "5" selected>Rs. 70,000/= per month</option>
		</select>
		<?php
			}
			?>
		</td>
	</tr>
	<tr>
		<td>Payment Status:</td>
		<td><input type="text" name="payment_status" value="<?php echo $payment_status; ?>" readonly /></td>
	</tr>
	<?php if(isset($contact_no1) && isset($contact_no2))
	{
		?>
	<tr>
		<td>Contact Number 1:</td>
		<td><input type="number" name="contactno1" value="<?php echo $contact_no1; ?>"/></td>
	</tr>
		<tr>
		<td>Contact Number 2:</td>
		<td><input type="number" name="contactno2" value="<?php echo $contact_no2; ?>"/></td>
	</tr>
	<?php 
	}
	elseif (!isset($contact_no1))
		{
			$contact_no1 = NULL;
		?>
	<tr>
		<td>Contact Number 1:</td>
		<td><input type="number" name="contactno1" value="<?php echo $contact_no1; ?>"/></td>
	</tr>
		<tr>
		<td>Contact Number 2:</td>
		<td><input type="number" name="contactno2" value="<?php echo $contact_no2; ?>"/></td>
	</tr>
	<?php
		} 
	elseif (!isset($contact_no2))
		{
			$contact_no2 = null;
		?>	
	<tr>
		<td>Contact Number 1:</td>
		<td><input type="number" name="contactno1" value="<?php echo $contact_no1; ?>"/></td>
	</tr>
		<tr>
		<td>Contact Number 2:</td>
		<td><input type="number" name="contactno2" value="<?php echo $contact_no2; ?>"/></td>
	</tr>
		<?php
		}
		?>
	</table>
	</fieldset>
	<br>
	<input type="submit" name="submit" value="Submit" style = "float : right;"/>
	<br>
</form>
			<?php } ?>
</body>

<?php	include_once("../../includes/footer.php"); ?>
</html>
<?php	require_once("../../includes/db_conn_close.php"); ?>
<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	require_once("../../includes/db_connection.php"); ?>
<?php	confirm_logged_in_employee(); ?>

<!DOCTYPE html>

<html>
<link rel = "stylesheet" href = "../stylesheets/view_information_styling.css">
<head>

<title>Employees' Area</title>
<?php
	if(logged_in_employee() || logged_in_admin())
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

<h1>Employees' Information</h1>
<?php	
	if(logged_in_employee())
	{
		include_once("../../includes/layouts/navbar_employee.php");
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
	if(isset($_SESSION["employee_id"])
	{
		$employee_id = $_SESSION["employee_id"];
	}
	else
	{
		$employee_id = $_GET["employee_id"];
	}
	$query = "SELECT * FROM employee_info WHERE ID = {$employee_id} ";
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
			$expertise = ucfirst(strtolower($row["EXPERTISE"]));
			$date = $row["HIREDATE"];
			$salary = ucfirst(strtolower($row['SALARY']));
			$bankname = ucfirst(strtolower($row['BANK_NAME']));
			$accountno = ucfirst(strtolower($row['ACCOUNT_NO']));
			$workhours = ucfirst(strtolower($row['WORK_HOURS']));
			$job= $row['JOB'];
			//Now checking the commission
			if(isset($commission))
			{
				$commission= ucfirst(strtolower($row['COMMISSION']));
			}
			else
			{
				$commission = null;
			}
			//Escaping the remaining strings
			$gender = mysqli_prep($gender);
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
<h2>If case of any inconsistencies, please update the valid information and press "Submit". Also note that Employee ID is a uniquely assigned to each member by the Club. It cannot be changed under any circumstances!</h2>

	<form action = "update_information_emp.php" method = "post">
	<fieldset>
<table>
	<legend>Your Info</legend>
	<tr>
		<td>ID:</td>
		<td><input type = "number" name = "employee_id" value = "<?php echo $id; ?>"></td>
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
		
		<tr>
		<td>Expertise:</td>
		<td><input type = "text" name = "expertise" value = "<?php echo $expertise; ?>" readonly /></td>
		</tr>
		
		<tr>
		<td>Hiredate:</td>
		<td><input type="date" name = "hiredate" value="<?php echo $date;?>" /></td>
		</tr>
		
		<tr>
		<td>Salary:</td>
		<td><input type = "number" name = "salary" value = "<?php echo $salary; ?>" readonly /></td>
		</tr>
		
		<tr>
		<td>Bank Name: (Associated with your salary account)</td>
		<td><input type = "text" name = "bankname" value = "<?php echo $bankname; ?>" /></td>
		</tr>
		
		<tr>
		<td>Account No: (Associated with your salary account)</td>
		<td><input type = "number" name = "accountno" value = "<?php echo $accountno; ?>"/></td>
		</tr>
		
		<tr>
		<td>Work Hours:</td>
		<td><input type = "text" name = "workhours" value = "<?php echo $workhours; ?>" readonly /></td>
		</tr>
		
		<tr>
		<td>Designation:</td>
		<td><input type = "text" name = "designation" value = "<?php echo $job; ?>" readonly /></td>
		</tr>
		
		<tr>
		<td>Commission: (if any)</td>
		<td><input type = "number" name = "commission" value = "<?php echo $commission;?>" readonly /></td>
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
			$contact_no2= null;
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
</body>

<?php	include_once("../../includes/footer.php"); ?>
</html>
<?php	require_once("../../includes/db_conn_close.php"); ?>
<?php	require_once("../../includes/db_connection.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php

	if(isset($_POST['submit']))
	{
		
		// Process the form
			
			$fname = mysqli_prep(string_prep(strtoupper($_POST['firstname'])));
			$lname = mysqli_prep(string_prep(strtoupper($_POST['lastname']))) ;
			$cnicno = mysqli_prep(string_prep($_POST['cnicno']));
			$houseno =  $_POST['houseno'];
			$block = mysqli_prep(string_prep(strtoupper($_POST['block'])));
			$area = mysqli_prep(string_prep(strtoupper($_POST['area'])));
			$city = mysqli_prep(string_prep(strtoupper($_POST['city'])));
			$country = mysqli_prep(string_prep(strtoupper($_POST['country'])));
			$email = mysqli_prep(string_prep($_POST['email']));
			$cardno = mysqli_prep(string_prep($_POST['cardno']));
			// Because gender is in a VARCHAR form in our database
			if($_POST['gender'] == 0)
			{
				 $gender = "MALE";
			}
			else
			{
				$gender = "FEMALE";
			}
			//Assigning values to the remaining attributes
			$date  = $_POST['joindate'];
			$type = "REG";
			$monthly_installments = "NULL";
			$payment_status = "NULL";
			$cost = 0;
			//Escaping the remaining strings
			$gender = mysqli_prep($gender);
			//First checking the contact number entries
			if($_POST['contactno1'] && $_POST['contactno2'])
			{
					//If User entered 2 contact nos
					$contactno1 = mysqli_prep($_POST['contactno1']);
					$contactno2 = mysqli_prep($_POST['contactno2']);
					//Inserting into members table, and making a single record and not entering the contactno
					$query1 = "INSERT INTO members(FNAME, LNAME, CNIC_NO, HOUSE_NO, BLOCK, AREA, CITY, COUNTRY, EMAIL, GENDER, CARD_NO, DATE_OF_JOINING, TYPE, COST_PER_MONTH, MONTHLY_INSTALLMENTS, PAYMENT_STATUS) VALUES ( '{$fname}', '{$lname}', '{$cnicno}', {$houseno}, '{$block}', '{$area}', '{$city}', '{$country}', '{$email}', '{$gender}', '{$cardno}', '{$date}', '{$type}', {$cost}, '{$monthly_installments}', '{$payment_status}')"; 
					$result1 = mysqli_query($connection, $query1);
					//Checking to see if our query ran fine
					if ($result1)
					{
						//Now inserting the contact numbers
						$member_id = mysqli_insert_id($connection); //Getting the last inserted ID values
						$query2 = "INSERT INTO member_contacts(ID, CONTACT_NO) VALUES ( {$member_id}, '{$contactno1}')";
						$result2 = mysqli_query($connection, $query2);
						$query3 = "INSERT INTO member_contacts(ID, CONTACT_NO) VALUES ( {$member_id}, '{$contactno2}')";
						$result3 = mysqli_query($connection, $query3);
						if($result2 && $result3)
						{
							//Complete and Perfect Execution
							$_SESSION["message"] = "Your registration was successful!";
							redirect_to("password_selection.php?member_id={$member_id}");
						}

					}
					else
					{
						//Failed execution. Sending message through Session
						$_SESSION["message"] = "Your infomation was incorrect. Please re-enter the information";
						redirect_to("mem_reg.php");
					}
					
			}
			//In case user entered only a single contact no
			elseif(!$_POST['contactno2'])
			{
				$contactno =  $_POST[ 'contactno1' ];	
				//Inserting into members table, and making a single record and not entering the contactno
				$query1 = "INSERT INTO members(FNAME, LNAME, CNIC_NO, HOUSE_NO, BLOCK, AREA, CITY, COUNTRY, EMAIL, GENDER, CARD_NO, DATE_OF_JOINING, TYPE, COST_PER_MONTH, MONTHLY_INSTALLMENTS, PAYMENT_STATUS) VALUES ( '{$fname}', '{$lname}', '{$cnicno}', {$houseno}, '{$block}', '{$area}', '{$city}', '{$country}', '{$email}', '{$gender}', '{$cardno}', '{$date}', '{$type}', {$cost}, '{$monthly_installments}', '{$payment_status}')"; 
				$result1 = mysqli_query($connection, $query1);
				//Checking to see if our query ran fine
				if ($result1)
				{
					$member_id = mysqli_insert_id($connection);
					$query2 = "INSERT INTO member_contacts(ID, CONTACT_NO) VALUES ( {$member_id}, '{$contactno}')";
					$result2 = mysqli_query($connection, $query2);
					if($result2)
					{
							$_SESSION["message"] = "Your registration was successful!";
							redirect_to("password_selection.php?member_id={$member_id}");
					}
				else
					{
						
						$_SESSION["message"] = "Your infomation was incorrect. Please re-enter the information";
						redirect_to("mem_reg.php");
					}
				}

			}
			elseif(!$_POST[ 'contactno1' ])
			{
				//Inserting into members table, and making a single record and not entering the contactno
				$query1 = "INSERT INTO members(FNAME, LNAME, CNIC_NO, HOUSE_NO, BLOCK, AREA, CITY, COUNTRY, EMAIL, GENDER, CARD_NO, DATE_OF_JOINING, TYPE, COST_PER_MONTH, MONTHLY_INSTALLMENTS, PAYMENT_STATUS) VALUES ( '{$fname}', '{$lname}', '{$cnicno}', {$houseno}, '{$block}', '{$area}', '{$city}', '{$country}', '{$email}', '{$gender}', '{$cardno}', '{$date}', '{$type}', {$cost}, '{$monthly_installments}', '{$payment_status}')"; 
				$result1 = mysqli_query($connection, $query1);
				//Checking to see if our query ran fine
				if ($result1)
				{
					$contactno = $_POST[ 'contactno2' ];
					$member_id = mysqli_insert_id($connection);
					$query2 = "INSERT INTO member_contacts(ID, CONTACT_NO) VALUES ( {$member_id}, '{$contactno}')";
					$result2 = mysqli_query($connection, $query2);
					if($result2)
					{
						$_SESSION["message"] = "Your registration was successful!";
						redirect_to("password_selection.php?member_id={$member_id}");
					}
					else
					{
						$_SESSION["message"] = "Your infomation was incorrect. Please re-enter the information";
						redirect_to("mem_reg.php");
					}
				}

			}
	}

	else
	{
		redirect_to("../index.php");
	}
	
?>

<?php
	require_once("../../includes/db_conn_close.php");
?>

<?php	require_once("../../includes/db_connection.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	require_once("../../includes/session.php"); ?>
<?php

	if(isset($_POST['submit']))
	{
			$member_id = $_POST["member_id"];
			$member_type = $_SESSION["member_type"];
			if($member_type == "PRV")
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
			//Selecting proper monthly installments
			if($_POST['monthlyinstallments'] == 1)
			{
				$monthly_installments = "30000";
			}
			elseif($_POST['monthlyinstallments'] ==2 )
			{
				$monthly_installments = "40000";
			}
			elseif($_POST['monthlyinstallments'] ==3 )
			{
				$monthly_installments = "50000";
			}
			elseif($_POST['monthlyinstallments'] ==4 )
			{
				$monthly_installments = "60000";
			}
			elseif($_POST['monthlyinstallments'] ==5 )
			{
				$monthly_installments = "70000";
			}	
			// Because gender is in a VARCHAR form in our database
			if($_POST['gender'] == 0)
			{
				 $gender = "MALE";
			}
			else
			{
				$gender = "FEMALE";
			}
			
			 $date  = $_POST['joindate'];
			//Escaping the remaining  strings
			$gender = mysqli_prep($gender);
			//Completing the remaining entries
			$cost = "NULL";
			$type = "PRV";
			$payment_status = mysqli_prep(string_prep($_POST["payment_status"]));
			//Checking the contact number entries
			if($_POST['contactno1'] && $_POST['contactno2'])
			{
					//If User entered 2 contact nos
					$contactno1 = mysqli_prep($_POST['contactno1']);
					$contactno2 = mysqli_prep($_POST['contactno2']);
					//Inserting into members table, and making a single record and not entering the contactno
					$query1 = "UPDATE members SET FNAME = '{$fname}', LNAME = '{$lname}', CNIC_NO = {$cnicno}, HOUSE_NO = {$houseno}, BLOCK = '{$block}', AREA = '{$area}', CITY = '{$city}', COUNTRY = '{$country}', EMAIL = '{$email}', GENDER = '{$gender}', CARD_NO = '{$cardno}', DATE_OF_JOINING = '{$date}', COST_PER_MONTH = '{$cost}', MONTHLY_INSTALLMENTS = '{$monthlyinstallments}', PAYMENT_STATUS = '{$payment_status}' WHERE ID = {$member_id} LIMIT 1";
					$result1 = mysqli_query($connection, $query1);
					//Checking to see if our query ran fine
					if ($result1)
					{
						//Now inserting the contact numbers
						//$member_id = mysqli_insert_id($connection); //Getting the last inserted ID values
						$query2 = "UPDATE member_contacts SET CONTACT_NO = '{$contactno1}' WHERE ID = {$member_id} LIMIT 1";
						$result2 = mysqli_query($connection, $query2);
						$query3 ="UPDATE member_contacts SET CONTACT_NO = '{$contactno2}' WHERE ID = {$member_id} AND CONTACT_NO <> {$contactno1} LIMIT 1";
						$result3 = mysqli_query($connection, $query3);
						if($result2 && $result3)
						{
							//Complete and Perfect Execution
							$_SESSION["message"] = "Your update was successful!";
							redirect_to("view_information.php?member_id={$member_id}");
						}

					}
					else
					{
						//Failed execution. Sending message through Session...
						$_SESSION["message"] = "Your infomation was incorrect. Please re-enter the information";
						redirect_to("view_information.php");
					}
					
			}
			//In case user entered only a single contact no
			elseif(!$_POST['contactno2'])
			{
				$contactno =  $_POST[ 'contactno1' ];	
				$query1 = "UPDATE members SET FNAME = '{$fname}', LNAME = '{$lname}', CNIC_NO = {$cnicno}, HOUSE_NO = {$houseno}, BLOCK = '{$block}', AREA = '{$area}', CITY = '{$city}', COUNTRY = '{$country}', EMAIL = '{$email}', GENDER = '{$gender}', CARD_NO = '{$cardno}', DATE_OF_JOINING = '{$date}', COST_PER_MONTH = '{$cost}', MONTHLY_INSTALLMENTS = '{$monthlyinstallments}', PAYMENT_STATUS = '{$payment_status}' WHERE ID = {$member_id} LIMIT 1";
				$result1 = mysqli_query($connection, $query1);
				if($result1)
				{
					//Again the same confirmation, if the above data was entered into the members table, then this part should run
					//$member_id = mysqli_insert_id($connection);
					$query2 = "UPDATE member_contacts SET CONTACT_NO = '{$contactno}' WHERE ID = {$member_id} LIMIT 1";
					$result2 = mysqli_query($connection, $query2);
					if($result2)
					{
							//Complete and Perfect Execution
							$_SESSION["message"] = "Your update was successful!";
							redirect_to("view_information.php?member_id={$member_id}");
					}
					else
					{
						
						$_SESSION["message"] = "Your infomation was incorrect. Please re-enter the information";
						redirect_to("view_information.php");
					}
				}
				else
				{
					die("Data entry failed!");
				}

			}
			elseif(!$_POST[ 'contactno1' ])
			{
				$contactno = $_POST[ 'contactno2' ];
				$query1 = "UPDATE members SET FNAME = '{$fname}', LNAME = '{$lname}', CNIC_NO = {$cnicno}, HOUSE_NO = {$houseno}, BLOCK = '{$block}', AREA = '{$area}', CITY = '{$city}', COUNTRY = '{$country}', EMAIL = '{$email}', GENDER = '{$gender}', CARD_NO = '{$cardno}', DATE_OF_JOINING = '{$date}', COST_PER_MONTH = '{$cost}', MONTHLY_INSTALLMENTS = '{$monthlyinstallments}', PAYMENT_STATUS = '{$payment_status}' WHERE ID = {$member_id} LIMIT 1";
				$result1 = mysqli_query($connection, $query1);
				if($result1)
				{
					//Again the same confirmation, if the above data was entered into the members table, then this part should run
					//$member_id = mysqli_insert_id($connection);
					$query2 ="UPDATE member_contacts SET CONTACT_NO = '{$contactno}' WHERE ID = {$member_id} LIMIT 1";
					$result2 = mysqli_query($connection, $query2);
					if($result2)
					{
							//Complete and Perfect Execution
							$_SESSION["message"] = "Your update was successful!";
							redirect_to("view_information.php?member_id={$member_id}");
					}
					else
					{
						
						$_SESSION["message"] = "Your infomation was incorrect. Please re-enter the information";
						redirect_to("view_information.php");
					}
				}
				else
				{
					//Something was wrong withe querying. Check your query
					die("Data entry failed!");
				}

			}
	}
elseif($member_type == "REG")
{
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
					//Checking to see whether 2 contact numbers exist in the database
					$query1 = "SELECT CONTACT_NO WHERE ID = {$member_id}"
					$result1 = mysqli_query($connection, $query1);
					if($result)
					{
						while($contactnos = mysqli_fetch_assoc($result))
						{
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
					}
					if(isset($contact_no1) && isset($contact_no2))
					{
						$query1 =  "UPDATE members SET FNAME = '{$fname}', LNAME = '{$lname}', CNIC_NO = {$cnicno}, HOUSE_NO = {$houseno}, BLOCK = '{$block}', AREA = '{$area}', CITY = '{$city}', COUNTRY = '{$country}', EMAIL = '{$email}', GENDER = '{$gender}', CARD_NO = '{$cardno}', DATE_OF_JOINING = '{$date}', COST_PER_MONTH = '{$cost}', MONTHLY_INSTALLMENTS = '{$monthly_installments}', PAYMENT_STATUS = '{$payment_status}' WHERE ID = {$member_id} LIMIT 1";
						$result1 = mysqli_query($connection, $query1);
						//Checking to see if our query ran fine
						if ($result1)
						{
							//Now inserting the contact numbers
							//$member_id = mysqli_insert_id($connection); //Getting the last inserted ID values
							$query2 = "UPDATE member_contacts SET CONTACT_NO = '{$contactno1}' WHERE ID = {$member_id} LIMIT 1";
							$result2 = mysqli_query($connection, $query2);
							$query3 = "UPDATE member_contacts SET CONTACT_NO = '{$contactno2}' WHERE ID = {$member_id} AND CONTACT_NO <> {$contactno1} LIMIT 1";
							$result3 = mysqli_query($connection, $query3);
							if($result2 && $result3)
							{
								//Complete and Perfect Execution
								$_SESSION["message"] = "Your update was successful!";
								redirect_to("view_information.php?member_id={$member_id}");
							}

						}
						elseif(isset($contact_no1) && !isset($contact_no2))
						{
							$query3 = 
						}
						{
							//Failed execution. Sending message through Session
							$_SESSION["message"] = "Your infomation was incorrect. Please re-enter the information";
							redirect_to("view_information.php");
						}
					}

					
			}
			//In case user entered only a single contact no
			elseif(!$_POST['contactno2'])
			{
				$contactno =  $_POST[ 'contactno1' ];	
				//Inserting into members table, and making a single record and not entering the contactno
				$query1 =  "UPDATE members SET FNAME = '{$fname}', LNAME = '{$lname}', CNIC_NO = {$cnicno}, HOUSE_NO = {$houseno}, BLOCK = '{$block}', AREA = '{$area}', CITY = '{$city}', COUNTRY = '{$country}', EMAIL = '{$email}', GENDER = '{$gender}', CARD_NO = '{$cardno}', DATE_OF_JOINING = '{$date}', COST_PER_MONTH = '{$cost}', MONTHLY_INSTALLMENTS = '{$monthlyinstallments}', PAYMENT_STATUS = '{$payment_status}' WHERE ID = {$member_id} LIMIT 1";
				$result1 = mysqli_query($connection, $query1);
				//Checking to see if our query ran fine
				if ($result1)
				{
					//$member_id = mysqli_insert_id($connection);
					$query2 = "UPDATE member_contacts SET CONTACT_NO = '{$contactno}' WHERE ID = {$member_id} LIMIT 1";
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
				$query1 = "UPDATE members SET FNAME = '{$fname}', LNAME = '{$lname}', CNIC_NO = {$cnicno}, HOUSE_NO = {$houseno}, BLOCK = '{$block}', AREA = '{$area}', CITY = '{$city}', COUNTRY = '{$country}', EMAIL = '{$email}', GENDER = '{$gender}', CARD_NO = '{$cardno}', DATE_OF_JOINING = '{$date}', COST_PER_MONTH = '{$cost}', MONTHLY_INSTALLMENTS = '{$monthlyinstallments}', PAYMENT_STATUS = '{$payment_status}' WHERE ID = {$member_id} LIMIT 1";
				$result1 = mysqli_query($connection, $query1);
				//Checking to see if our query ran fine
				if ($result1)
				{
					$contactno = $_POST[ 'contactno2' ];
					//$member_id = mysqli_insert_id($connection);
					$query2 = "UPDATE member_contacts SET CONTACT_NO = '{$contactno}' WHERE ID = {$member_id} LIMIT 1";
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
}

else
{
	redirect_to("view_information.php");
}
?>

<?php
	require_once("../../includes/db_conn_close.php");
?>
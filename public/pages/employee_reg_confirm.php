<?php	require_once("../../includes/db_connection.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	require_once("../../includes/session.php"); ?>
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
			// Because gender is in a VARCHAR form in our database
			if($_POST['gender'] == 0)
			{
				 $gender = "MALE";
			}
			else
			{
				$gender = "FEMALE";
			}
			$expertise= mysqli_prep(string_prep($_POST['expertise']));
			//Assigning values to the remaining attributes
			$date  = $_POST['hiredate'];
			$salary = mysqli_prep(string_prep(strtoupper($_POST['salary'])));
			$bankname = mysqli_prep(string_prep(strtoupper($_POST['bankname'])));
			$accountno = mysqli_prep(string_prep(strtoupper($_POST['accountno'])));
			$workhours = mysqli_prep(string_prep(strtoupper($_POST['workhours'])));
			$job= mysqli_prep(string_prep(strtoupper($_POST['designation'])));
			$commission = $_POST['commission'];
			//Now checking the contact_no and running the valid queries
			if(isset($commission))
			{
				$commission= mysqli_prep(string_prep(strtoupper($_POST['commission'])));
			}
			else
			{
				$commission = null;
			}
			//Escaping the remaining strings
			$gender = mysqli_prep($gender);
			//First checking the contact number entries
	if($_POST['contactno1'] && $_POST['contactno2'])
			{
					//If User entered 2 contact nos
					$contactno1 = mysqli_prep($_POST['contactno1']);
					$contactno2 = mysqli_prep($_POST['contactno2']);
					//Inserting into members table, and making a single record and not entering the contactno
					$query1 = "INSERT INTO employees(FNAME, LNAME, CNIC_NO, HOUSE_NO, BLOCK, AREA, CITY, COUNTRY, EMAIL, GENDER, EXPERTISE, HIREDATE, SALARY, BANK_NAME, ACCOUNT_NO, WORK_HOURS, JOB, COMMISSION) VALUES ( '{$fname}', '{$lname}', '{$cnicno}', {$houseno}, '{$block}', '{$area}', '{$city}', '{$country}', '{$email}','{$gender}','{$expertise}', '{$date}', '{$salary}', '{$bankname}', '{$accountno}', '{$workhours}', '{$job}', '{$commission}')"; 
					$result1 = mysqli_query($connection, $query1);

					//Checking to see if our query ran fine
					if ($result1)
					{
						//Now inserting the contact numbers
						$employee_id = mysqli_insert_id($connection); //Getting the last inserted ID values
						$query2 = "INSERT INTO employee_contacts(ID, CONTACT_NO) VALUES ( {$employee_id}, '{$contactno1}')";
						$result2 = mysqli_query($connection, $query2);
						$query3 = "INSERT INTO employee_contacts(ID, CONTACT_NO) VALUES ( {$employee_id}, '{$contactno2}')";
						$result3 = mysqli_query($connection, $query3);
						if($result2 && $result3)
						{
								//Making the password
								$digits = 4;
								$password = generate_password($digits);
								$_SESSION["password"] = $password;
								$hashed_password = password_encrypt($password);
								$query = "INSERT INTO employee_login(EMPLOYEE_ID, PASSWORD) VALUES ({$employee_id}, '{$hashed_password}')";
								$result =mysqli_query($connection, $query);
								if($result)
								{
									//Complete and perfect execution of the employee info, contact nos, and the password
									redirect_to("employee_login.php?employee_id={$employee_id}");
								}
								else
								{
									$_SESSION["message"] = "Something went wrong. Please re-enter the password!";
									echo mysqli_error($connection);
									redirect_to("employee_registration.php");
								}
						}
					}
					else
					{
						$_SESSION['message'] = "Your user information is invalid. Please re-enter!";	
						redirect_to("employee_registration.php");
					}
			}
			//In case user entered only a single contact no
	elseif(!$_POST['contactno2'])
			{
				$contactno =  $_POST[ 'contactno1' ];	
				//Inserting into members table, and making a single record and not entering the contactno
				$query1 = "INSERT INTO employees(FNAME, LNAME, CNIC_NO, HOUSE_NO, BLOCK, AREA, CITY, COUNTRY, EMAIL, GENDER, EXPERTISE, HIREDATE, SALARY, BANK_NAME, ACCOUNT_NO, WORK_HOURS, JOB, COMMISSION) VALUES ( '{$fname}', '{$lname}', '{$cnicno}', {$houseno}, '{$block}', '{$area}', '{$city}', '{$country}', '{$email}', '{$gender}','{$expertise}', '{$date}', '{$salary}', '{$bankname}', '{$accountno}', '{$workhours}', '{$job}', '{$commission}')"; 
				$result1 = mysqli_query($connection, $query1);
				//Checking to see if our query ran fine
				if ($result1)
				{
						//Inserting the contact no
						$employee_id = mysqli_insert_id($connection); //Getting the last inserted ID values
						$query2 = "INSERT INTO employee_contacts(ID, CONTACT_NO) VALUES ({$employee_id}, '{$contactno}')";
						$result2 = mysqli_query($connection, $query2);
						if($result2)
						{
							$digits = 4;
							$password = generate_password($digits);
							$_SESSION["password"] = $password;
							$hashed_password = password_encrypt($password);
							$query = "INSERT INTO employee_login(EMPLOYEE_ID, PASSWORD) VALUES ({$employee_id}, '{$hashed_password}')";
							$result = mysqli_query($connection, $query);
							if($result)
							{
								//Complete and perfect execution of the employee info, contact nos, and the password
								redirect_to("employee_login.php?employee_id={$employee_id}");
							
							}
							else
							{
								$_SESSION["message"] = "Your password wasn't correctly inserted. Please re-insert the values, and try again!";
								redirect_to("employee_registration.php");
							}

						}
						else
						{
							$_SESSION["message"] = "Something went wrong. Please re-enter";
							redirect_to("employee_registration.php");
						}
				}
				else
				{
					$_SESSION['message'] = "Your user information is invalid. Please re-enter!";
					redirect_to("employee_registration.php");
				}

			}
	elseif(!$_POST[ 'contactno1' ])
		{
				//Inserting into members table, and making a single record and not entering the contactno
				$query1 = "INSERT INTO employees(FNAME, LNAME, CNIC_NO, HOUSE_NO, BLOCK, AREA, CITY, COUNTRY, EMAIL, GENDER, EXPERTISE, HIREDATE, SALARY, BANK_NAME, ACCOUNT_NO, WORK_HOURS, JOB, COMMISSION) VALUES ( '{$fname}', '{$lname}', '{$cnicno}', {$houseno}, '{$block}', '{$area}', '{$city}', '{$country}', '{$email}', '{$gender}', '{$expertise}', '{$date}', '{$salary}', '{$bankname}', '{$accountno}', '{$workhours}', '{$job}', '{$commission}')"; 
				$result1 = mysqli_query($connection, $query1);
				//Checking to see if our query ran fine
				if ($result1)
				{
					$contactno = $_POST[ 'contactno2' ];
					$employee_id = mysqli_insert_id($connection);
					$query2 = "INSERT INTO employee_contacts (ID, CONTACT_NO) VALUES ({$employee_id}, '{$contactno}')";
					$result2 = mysqli_query($connection, $query2);
					if($result2)
					{
						$employee_id = mysqli_insert_id($connection);
						//Making the password
						$digits = 4;
						$password = generate_password($digits);
						$_SESSION["password"] = $password;
						$hashed_password = password_encrypt($password);
						$query = "INSERT INTO employee_login(EMPLOYEE_ID, PASSWORD) VALUES ({$employee_id}, '{$hashed_password}')";
						$result =mysqli_query($connection, $query);
						if($result)
						{
							//Complete and perfect execution of the employee info, contact nos, and the password
							redirect_to("employee_login.php?employee_id={$employee_id}");
						}
						else
						{
							$_SESSION["message"] = "Your password didn't inserted correctly. Please reenter the values and retry!!";
							redirect_to("employee_registration.php");
						}
					}
				}
				else
				{
					$_SESSION['message'] = "Your user information was invalid. Please re-enter!";
					redirect_to("employee_registration.php");
				}

		}
	}
	else
	{
		redirect_to("admin_area.php");
	}
?>

<?php
	require_once("../../includes/db_conn_close.php");
?>

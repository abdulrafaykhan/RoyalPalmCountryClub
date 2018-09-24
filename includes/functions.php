
<?php
	function redirect_to($new_location)
	{
		header("Location: " . $new_location);
		exit;
	}
?>
<?php
	function mysqli_prep($string)
	{
		global $connection;
		$escaped_string = mysqli_real_escape_string($connection, $string);
		return $escaped_string;
	}
	
	function string_prep($string)
	{
		$prepped_string = htmlspecialchars(stripslashes(trim($string)));
		 return $prepped_string; 
	}
?>
<?php
	function query_check($result_set)
	{
		if(!$result_set)
		{
			die("Query execution failed!");
		}
	}
?>
<?php
		function member_id_show($result_set)
		{
			while($row = mysqli_fetch_assoc($result_set))
			{
				$member_id = $row['ID'];
				
			}
			return $member_id;
		}
		
?>


<?php
	function check_values()
	{
		if(isset($_POST['submit'])) //to run PHP script on submit
		{
			if(!empty($_POST['check_list']))
			{
			// Loop to store and display values of individual checked checkbox.
				foreach($_POST['check_list'] as $selected)
				{
					echo $selected."</br>";
				}
			}

		}
	}
?>
	
<?php
	function password_encrypt($password)
	{
		$hash_format = "$2y$10$"; //Tells php to use Blowfish with a "cost" of 10
		
		$salt_length = 22;
		
		$salt = generate_salt($salt_length);
		
		$format_and_salt = $hash_format . $salt;
		
		$hash = crypt($password, $format_and_salt);
		
		return $hash;
		
	}
	
	function generate_salt($length)
	{
		//Not 100% unique, not 100% random but good enough for a salt
		//MD5 returns 32 characters
		
		$unique_random_string = md5(uniqid(mt_rand(), true));
		
		//Valid characters for a salt are [a-zA-z0-9./]
		$base64_string = base64_encode($unique_random_string);
		
		//But not '+' which is valid in base64 encoding
		$modified_base64_string = str_replace('+', '.', $base64_string);
		
		//Truncate string to the correct length
		$salt = substr($modified_base64_string, 0, $length);
		
		return $salt;
	}
	
	function password_check($password, $existing_hash)
	{
		$hash = crypt($password, $existing_hash);
		if($hash === $existing_hash)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
?>
<?php
	function find_member($member_id)
	{
		global $connection;
		$query = "SELECT * FROM logins WHERE MEMBER_ID = {$member_id} LIMIT 1";
		$result = mysqli_query($connection, $query);
		if($result)
		{
			if($member = mysqli_fetch_assoc($result))
			{
				return $member;
			}
			else 
			{
				return null;
			}
		}
	}
	
	function attempt_login_member($member_id, $password)
	{
		$member = find_member($member_id);
		if($member)
		{
					// found the member, now check password
					if(password_check($password, $member['PASSWORD']))
					{
						//password matches
						return $member;
					}
					else
					{
						return false;
					}
		}
		else
		{
			return false;
		}
	}
		function find_employee($employee_id)
	{
		global $connection;
		$query = "SELECT * FROM employee_login WHERE EMPLOYEE_ID = {$employee_id} LIMIT 1";
		$result = mysqli_query($connection, $query);
		if($result)
		{
			if($employee = mysqli_fetch_assoc($result))
			{
				return $employee;
			}
			else 
			{
				return null;
			}
		}
	}
		function attempt_login_employee($employee_id, $password)
		{
			$employee = find_employee($employee_id);
			if($employee)
			{
						// found the member, now check password
						if(password_check($password, $employee['PASSWORD']))
						{
							//password matches
							return $employee;
						}
						else
						{
							return false;
						}
			}
			else
			{
				return false;
			}
		}

		function find_admin($admin_username)
		{
			global $connection;
			$query = "SELECT * FROM admins WHERE USERNAME='{$admin_username}' LIMIT 1";
			$result = mysqli_query($connection, $query);
			if($result)
			{
				if($admin = mysqli_fetch_assoc($result))
				{
					return $admin;
				}
				else 
				{
					return null;
				}
			}
		}
		
	function attempt_login_admin($username, $password)
	{
		$admin = find_admin($username);
		if($admin)
		{
					// found the member, now check password
					if(password_check($password, $admin['PASSWORD']))
					{
						//password matches
						return $admin;
					}
					else
					{
						return false;
					}
		}
		else
		{
			return false;
		}
	}
	function logged_in_member()
	{
		return (isset($_SESSION["member_id"]) || isset($_SESSION["username"]));
	}
	function confirm_logged_in_member()
	{
		if(!logged_in_member())
		{
			$_SESSION["message"] = "You must first log in!";
			redirect_to("mem_login.php");
		}
	}
	function logged_in_employee()
	{
		return (isset($_SESSION["employee_id"]) || isset($_SESSION["username"]));
	}
	function confirm_logged_in_employee()
	{
		if(!logged_in_employee())
		{
			$_SESSION["message"] = "You must first log in!";
			redirect_to("employee_login.php");
		}
	}
	function logged_in_admin()
	{
		return (isset($_SESSION["username"]));
	}
	function confirm_logged_in_admin()
	{
		if(!logged_in_admin())
		{
			$_SESSION["message"] = "You must first log in!";
			redirect_to("admin_login.php");
		}
	}
	
	function generate_password($digits)
	{
		$digits = 4;
		$i = 0; //counter
		$pin = ""; //our default pin is blank.
		while($i < $digits)
		{
			//generate a random number between 0 and 9.
			$pin .= mt_rand(0, 9);
			$i++;
		}
		return $pin;
}


    function in_assoc($needle,$array)
    {
        $key = array_keys($array);
        //$value = array_values($array);
        if (in_array($needle,$key))
		{
			return true;
		}
        //elseif (in_array($needle,$value))
		//{
		//	return true;
		//	}
        else 
		{
			return false;
		}
    }
	function check_date($date)
	{
		if($fromdate > $tilldate || $tilldate < $fromdate)
		{
			echo "Dates are invalid!";
		}
		elseif($fromdate < date('m-Y-d') || $tilldate < date("m-Y-d"))
		{
			echo "Dates are invalid!";
		}
		else
		{
			return $date;
		}
	}

?>

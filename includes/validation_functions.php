<?php
	
		$errors = array();
		//presence check
		function has_presence($value)
		{
			return	isset(trim($value)) && $value !== "";
	
		
		}
				function validate_presences($required_fields)
		{
			global $errors;
			foreach($required_fields as $field)
			{
				$value = trim($_POST[$field]);
				if(!has_presence($value))
				{
					$errors[$field] = ucfirst($field) . " cannot be left blank.";
				}
			}
		}
	
		//string length
		//min length
		function has_min_length($value, $min)
		{
				return strlen($value) >= $min;
		
			
		}
	
		//max length
		function has_max_length($value, $max)
		{
				return strlen($value) <= $max;
	
		}
		function validate_max_lengths($fields_with_max_length)
		{
			global $errors;
			// Expects as assosciative array
			foreach($fields_with_max_lengths as $field => $max)
			{
				$value = trim($_POST[$field]);
				if(!has_max_length($value, $max)
				{
					$errors[$field] = ucfirst($field) . " is too long! Please enter a valid figure."
				}
			}
		}
	
		//type
		function is_type_string($value)
		{
			return is_string($value);
		}
		function is_type_int($value)
		{
			return is_int($value);
		}
	
		//inclusion in a set
		function has_inclusion_in($value, $set)
		{
			return in_array($value, $set);
		}
	
		
		//uniqueness. Uses a database
		
		// use a regex on a string
		// preg_match($regex, $subject)
		/*if(!preg_match($string1, $string2))
		{
			echo "A match was not found!";
		}*/
		
		function form_errors($errors = array())
		{
			if(!empty($errors))
			{
				$output = "<div class \"error\">";
				$output .= "Please fix the following errors: ";
				$output .= "<ul>";
				foreach ($errors as $key => $error)
				{
					$output .= "<li>{$error}</li>";
				}
				$output .= "</ul>";
				$output .= "</div>";
			}
			return $output;
		}

	
			
		//format
	?>

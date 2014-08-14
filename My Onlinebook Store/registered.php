<html>
	<head>
		<title>Book Store</title>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="style.css" type="text/css" media="all" />
		<script type="text/javascript">
			$function()
			{
			}
		</script>
	</head>
	<body>
		<h1 align="center"><font color='red'>WELCOME TO BOOK STORE</h1>
		<div id="Main">
			<form>
				<?php
					require("connect.php");
					$firstname = $_POST['firstname'];
					$lastname = $_POST['lastname'];
					$username = $_POST['username'];
					$emailid = $_POST['emailid'];
					$password = $_POST['password'];
					$confpassword = $_POST['confpassword'];
					$phonenumber = $_POST['phonenumber'];
					$creditcardno = $_POST['creditcardno'];
					$isValidated = true;
	
			if (empty($firstname) || empty($lastname))
			{
				echo ("First Name and Last Name should not be empty. Please provide valid input<br/>");
				$isValidated = false;
			}
			else if (strlen($password) < 6)
			{
				echo ("Password too short..");
			}
			else if (strcmp($password, $confpassword) != 0)
			{
				echo ("Password and Confirm Password doesn't matched");
					$isValidated = false;
			}
			else if (strlen($creditcardno) != 16 )
			{
				echo ("Credit card number is not correct");
				$isValidated = false;
			}
			else if (strlen($phonenumber) != 10 )
			{
				echo ("Phone number is not correct");
				$isValidated = false;
			}
	if ($isValidated)
	{
		$select_sql = mysql_query ("SELECT count(*) FROM users WHERE user_email_id = '" . $_POST['emailid'] . "' OR user_user_name = '" .$_POST['username'] . "' LIMIT 1");
		if (mysql_result($select_sql, 0) == 0)
		{
			$insert_sql = mysql_query("INSERT INTO users(user_first_name, user_last_name, user_user_name, user_email_id, user_password, user_phone_number, user_credit_card_no) VALUES('" . $_POST['firstname'] . "','" . $_POST['lastname'] . "','" . $_POST['username'] . "','" . $_POST['emailid'] . "','" . md5($_POST['password']) . "'," . $_POST['phonenumber'] . "," . $_POST['creditcardno'] . ")");
			if ($insert_sql == 1)
			{
				echo "Welcome New User, " . $_POST['firstname'] . " " . $_POST['lastname'] . "...!!!<br /><br />";
				echo "<label><a href='index.php'>Click here to login...!!!</a></label><br />";
				$_SESSION['username']=$username;
				//require("cart.php");
			}
		}
		else
		{
			echo "Email ID: " . $_POST['emailid'] . " or User Name: " . $_POST['username'] . " is already registered...!!!<br /><br />";
			echo "<label><a href='index.php?page=register'>Click here to login...!!!</a></label><br />";
		}
	}
	else
	{
		echo "<a href='index.php?page=register'>Try Again?</a>";
	}
?>
			</form>
		</div>
	</body>
</html>
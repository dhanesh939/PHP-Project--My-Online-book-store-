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
		<div id="Container">
			<form method="POST" action="registered.php">
					<h3 style="text-decoration:underline;">User Information</h3>
					<label>First Name: </label>
					<input class="roundcorners" type="text" name="firstname" placeholder="Enter First"/>
					<label>Last Name: </label>
					<input class="roundcorners" type="text" name="lastname" placeholder="Enter Last"/><br /><br />
					<label>Username: </label>
					<input class="roundcorners" type="text" name="username" placeholder="Enter Username"/>
					<label>Email: </label>
					<input class="roundcorners" type="email" name="emailid" placeholder="abc@b-kart.com"/><br /><br />
					<label>Password: </label>
					<input class="roundcorners" type="password" name="password" placeholder="Enter Password"/>
					<label>Confirm Password: </label>&nbsp;
					<input class="roundcorners" type="password" name="confpassword" placeholder="Enter Password"/><br /><br />
					<label>Phone Number: </label>&nbsp;&nbsp;&nbsp;&nbsp;
					<input class="roundcorners" type="text" name="phonenumber" placeholder="Enter Phone Number"/>
					<label>Credit Card No: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input class="roundcorners" type="text" name="creditcardno" placeholder="Enter Credit Card No"/><br /><br />
					<label>Address: </label>
					<input class="roundcorners" type="text" name="address" placeholder="Enter Address"/><br /><br />
					<input class="roundcorners" type="reset" name="reset" value="Reset Form"/><input class="roundcorners" type="submit" name="register" value="Register"/>
				</form>
		</div>
	</body>
</html>
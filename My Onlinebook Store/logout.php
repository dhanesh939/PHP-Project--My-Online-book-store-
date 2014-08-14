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
				unset($_SESSION['cart']);
				unset($_SESSION['username']);
				echo "Logged Off Successfully<br /><br />";
				echo "<label><a href='index.php'>Click here to login...!!!</a></label><br />";
?>
			</form>
		</div>
	</body>
</html>
<?php
	session_start();
	//session_destroy();
	require("connect.php");
	if (isset($_GET['page']))
	{
		$pages=array("books","cart","login","checkout","register", "registered", "logout");
			if (in_array($_GET['page'],$pages))
			{
				$_page=$_GET['page'];
			//echo "$_page";
			}
			else
			{
				$_page="books";
			}
	}
	else
	{
		$_page="books";
	}
	
?>
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
			<div>
			<?php
			if(!(isset($_SESSION['username'])))
			{ 
			?>
			<form action="index.php?page=login" method="POST">
				<label ><font color='orange' size=4>User Name</font></label>
				<input type="text" name="username" id="username"/>
				<label><font color='orange' size=4>Password</font></label>
				<input type="password" name="password" id="password"/>
				<input type="submit" name="submit" id="submit" value="Login" />
				</form>
			<?php
			}
			?>
				
			</div>
			<div id="Main">
				<?php require($_page.".php");?>
		</div>
		<div id="sidebar">
		<h1 ><font color="red">Cart items</h1>
	<?php
					
		if(isset($_SESSION['cart']))
			{	
				$total=0;
				$check_tquantity=0;
				foreach($_SESSION['cart'] as $ID => $x)
				{ 
					$temp1 = mysql_query("SELECT * FROM books WHERE id_book=$ID") or die(mysql_error());
					$check_item=mysql_fetch_array($temp1);
					$check_title=$check_item['Title'];
					$check_price=$check_item['Price'];
					$check_sum=$check_price * $x;//total of ech item quantity * price
					$check_tquantity=$check_tquantity+$x;//total quantity
					$total=$total+$check_sum;//total amount
					
					echo"<p font size=4>".$check_title." *Quantity*==>". $x. "</p>"; 
				}
			}
		else
			{
				echo "cart is empty";
			}
		echo"<hr />";
		echo"<font size='4' color='orange' text>Go to cart <a href='index.php?page=cart'><img src='icons/Arrow-Left.ico' height='20' width='20'></a>";
		echo"<br />";
		echo"<br />";
		echo "<font size='4' color='orange' text> checkout  <a href='index.php?page=checkout'><img src='icons/Thumbs_Up.ico' height='20' width='20'></a>";
		echo"<br />";
		echo"<br />";
		echo "<font size='4' color='orange' text>Empty cart  <a href='index.php?page=books&action=emptyall'><img src='icons/Thumbs_down.ico' height='20' width='20'></a>";
		echo"<br />";
		echo"<br />";
		echo"Go back  <a href='index.php?page=books'><img src='icons/Arrow-Right.ico' height='20' width='20'></a><font size='4' color='orange' text> ";
		if(isset($_SESSION['username']))
		{
		echo"<br />";
		echo"<br />";
			echo "<font size='4' color='orange' text>Logout..!!!<a href='index.php?page=logout'><img src='icons/Thumbs_down.ico' height='20' width='20'></a>";
		}
		
		?>
		
		</div>
	</body>
</html>
<?php
	if(isset($_GET['id']))
		{
			$ID = $_GET['id'];
		}
	else 
		{
			$ID=1;
		}
	if(isset($_GET['action']))
		{
			$action = $_GET['action'];
		}
	else{
			$action="empty";
		}
	switch($action){
		case "add":
			if(isset($_SESSION['cart'][$ID]))
			{
				$_SESSION['cart'][$ID]++;
			}
			else
			{
				$_SESSION['cart'][$ID]=1;
			}
		break;
		case "remove":
			if(isset($_SESSION['cart'][$ID]))
				{
					$_SESSION['cart'][$ID]--;
					if($_SESSION['cart'][$ID]==0)
					{
						unset($_SESSION['cart'][$ID]);
					}
				}
		break;
		case "emptyall":
			unset($_SESSION['cart']);
			unset($_SESSION['username']);//total cart get empty u can use as a button to to empty whole cart.
		break;
		}
		//$_SESSION['username'] = "123";
		//unset($_SESSION['username']);
		if(!(isset($_SESSION['username'])))
		{
			echo "<h3>Please login before proceeding.</h3>";
		}
		?>
<h1><font color='red'>BOOKS</h1>
	<table>
		<tr>
			<th >Title</th>
			<th >Author</th>
			<th >Year</th>
			<th >Price</th>
			<th font color="red">Add</th>
		</tr>
		
  <?php  
 $data = mysql_query("SELECT * FROM books ORDER BY Title ASC") or die(mysql_error()); 

 while($info = mysql_fetch_array( $data )) 
 { 
			 echo "<tr>"; 
			 echo "<td>".$info['Title'] . "</td> "; 
			 echo "<td>".$info['Author'] . " </td>";
			 echo "<td>".$info['Year'] . "</td>"; 
			 echo "<td>$".$info['Price'] . "</td>"; 
			 echo '<td><a href="index.php?page=books&action=add&id='.$info['id_book'].'"><img src=icons/Symbol-Add.ico height=20 width=20></a></td>';
 }
 ?>
 </table>
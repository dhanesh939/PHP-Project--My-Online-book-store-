<?php
	if(!(isset($_SESSION['username'])))
	{
		header("Location: http://localhost/php project/index.php");
	}
	else
	{
		//display the output
		
		echo "<h1>Checkout</h1>";
		if(isset($_SESSION['cart']))
		{	 //this is header of the table
					echo"<table>";
					echo "<tr>"; 
					echo "<th>Title</th>"; 
					echo "<th>Price</th>";
					echo "<th>Quantity</th>";
					echo "<th>Total</th>";
					echo "<th>Amount</th>";
					echo "</tr>";
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
					echo "<tr>"; 
					
					echo "<td>".$check_title. "</td> "; 
					echo "<td>$".$check_price. " </td>";
					echo "<td>$x</td>";
					echo "<td>$"."$check_sum". " </td>";
					echo "<td></td>";
					echo"</tr>";
				}
			echo"<tr>";
			echo"<td>INVOCE INFO</td>";
			echo"<td>Total  Items</td>";
			echo "<td>".$check_tquantity. " </td>";
			
			echo"<td align = 'right' > AMOUNT </td>";
			
			echo"<td>$"."$total"."</td>";
			
			echo"</tr>";
			echo"</table>";
			
		}
		else
		{
			echo "cart is empty";
		}
	}
		?>
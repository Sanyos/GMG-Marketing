
<!DOCTYPE html>
<html>
	<head>
		<title>Tesztfeladat</title>
		<style>
			table,th,td{
				text-align: center;
				border:1px solid black;
			}
		</style>
	</head>
	<body>
		<?php
			include "sqlquery.php";
			//print answer
			echo nl2br("The user's income with modulebugbear@randomthings.com e-mail adress :"); 
		?>
		<table>
			<tr>
				<th>Date</th><th>Amount</th>
			</tr> 
			<?php
				//print answer to tr td
				while ($row = mysql_fetch_assoc($result)) { 
					echo "<tr>";
					echo "<td>".$row['day']."</td>"."<td>".$row['amount']."</td>";
				    echo "<tr>";
				}
				//force garbage collect
				mysql_free_result($result);  
			?>
		</table>
	</body>
</html>
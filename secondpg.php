<?php 
session_start();
$con=mysqli_connect('localhost','root','','table');

$q="select * from viewcust ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);


?>
<html>
<head>
   <title>viewUser</title>
   <link rel="stylesheet" href="style2.css">
   
   
</head>
	
<body>
	
    <table class="flat-table-1">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Email-id</th>
			<th>Balance</th>
			<th></th>
		</thead>
		<tbody>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["mailid"]; ?></td>
			<td><?php echo  $row["bal"]; ?></td>
			<td>
				<form action="user.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="Disha">View</button>
				</form>
			</td>
		</tr>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 2</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["mailid"]; ?></td>
			<td><?php echo  $row["bal"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Gauri">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 3</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["mailid"]; ?></td>
			<td><?php echo  $row["bal"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Kirti">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 4</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["mailid"]; ?></td>
			<td><?php echo  $row["bal"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Nandini">View</button>
				</form>
			</td>
   

        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 5</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["mailid"]; ?></td>
			<td><?php echo  $row["bal"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Shruti">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 6</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["mailid"]; ?></td>
			<td><?php echo  $row["bal"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Vaishnavi">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
     
				$row=mysqli_fetch_array($result);
			?>
			<td> 7</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["mailid"]; ?></td>
			<td><?php echo  $row["bal"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Neeta">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php   
				$row=mysqli_fetch_array($result);
			?>
			<td> 8</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["mailid"]; ?></td>
			<td><?php echo  $row["bal"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Sneha">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 9</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["mailid"]; ?></td>
			<td><?php echo  $row["bal"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Asha">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 10</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["mailid"]; ?></td>
			<td><?php echo  $row["bal"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Ansh">View</button>
				</form>
			</td>
		</tr>
		</tbody>
	</table>

<div class="topnav">

  <a href="transferhist.php">Transfer History</a>
  <a href="transfer.php">Transfer Money</a>
  <a href="Secondpg.php">Customers</a>
  	<a href="index.html">Home</a>
	<a style="text-align:left; float:left;">DB BANK</a>
</div>


	</body> 
	</html>
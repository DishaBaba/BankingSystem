<?php 
session_start();
$con=mysqli_connect('localhost','id16160280_custom','4VN-<0>6EfQ5POYn','id16160280_customer');
$name=$_POST['name'];
$q="select * from viewcust where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['mailid'];
$bal=$row['bal'];
$_SESSION['name']=$name;

?>
<html>
<head>
	<title><?php echo $name?></title>
	<link rel="stylesheet" href="style3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
</head>
<style>
	
		body{
		background-image:url("7.jpg");
		
		background-size: cover;
		font-family: Arial, Helvetica, sans-serif;
	}
	</style>
    <body>
	<div class="topnav">

  <a href="transferhist.php">Transfer History</a>
  <a href="transfer.php">Transfer Money</a>
  <a href="Secondpg.php">Customers</a>
  	<a href="index.html">Home</a>
	<a style="text-align:left; float:left;">DB BANK</a>
</div>
<h1 style=" font-size:45px;color:#3e3e3e;text-shadow: 1.5px 1.5px black;">Customer Details</h1><br>
	<br><br><br>
    <div class="view">
       <table class="flat-table-1">
			<tr>
				<th>Name</th>
				<td><?php echo $name?></td>
			</tr>
			
			<tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th>Email-id</th>
				<td><?php echo $mail?></td>
			</tr>
           
           <tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th> Balance</th>
				<td><?php echo $bal?></td>
			</tr>


        </table>

        </div>
		<form action="secondpg.php" method="post">
		<div>
			<button class="btn btn-primary" style="border-radius:10px;
		border: 1px solid black;
		height: 25px;
		width: 80px;
		position:absolute;
		top:9%;
		left:1%;
		overflow: hidden;
		cursor: pointer;
		color:white;
		font-size:17px;
		font-weight:bold;
		background:#42494e;" type="submit">Back</button>
</div>
		</form>
    </body>
</html>
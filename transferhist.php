<?php
session_start();
$con=mysqli_connect('localhost','root','','table');
$q="select * from transaction";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transaction</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		

	</head>
	<body>
	<div class="topnav">

<a href="transferhist.php">Transfer History</a>
<a href="transfer.php">Transfer Money</a>
<a href="Secondpg.php">Customers</a>
	<a href="index.html">Home</a>
  <a style="text-align:left; float:left;">DB BANK</a>
</div>
<style>
		*{
		margin:0;
		padding: 0;
		outline: 0;
	   }
	
	.topnav {
		overflow: hidden;
		background-color: #333;
	  }
.topnav a {
float: right;
color: #f2f2f2;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}

.topnav a:hover {
background-color: #ddd;
color: black;
}
body{
			background-image:url("7.jpg");
			background-position: center;
			background-repeat: repeat;
			background-size:cover;
			height:100vh;
			font-family: Arial, Helvetica, sans-serif;
		}
		

*{
    margin:0;
    padding: 0;
    outline: 0;
   }
   
   table{
    position: absolute;
    z-index: 2;
    left: 10%;
   top:10%;
    width: 80%; 
    border-collapse: collapse;
    border-spacing: 0;
    box-shadow: 0 2px 15px rgba(64,64,64,.7);
    
    overflow: hidden;
    border-radius: 5px;
   
   }
   td , th{
    padding: 15px 15px;
    text-align: center;
    
   
   }
   th{
    background-color: #0bb1ee;
    color: #fafafa;
    font-family: 'Open Sans',Sans-serif;
    font-weight: 200;
    text-transform: uppercase;
   
   }
   tr{
    width: 100%;
    background-color: #fafafa;
    font-family: 'Montserrat', sans-serif;
   }
   tr:nth-child(even){
    background-color: #eeeeee;
   }
   
   
       .button1 {
    width: 100px;
    height: 25px;
    outline: none;
    color: black;
	font-size:18px;
	background: #8cc4d8;
	text-shadow: 0.7px 0.7px black;
	overflow: hidden;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
	border: 1px solid #66ecec;
    font-family: 'Open Sans',Sans-serif;
}



</style>

	<br><br><br><br><br><br>
		
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>Receiver</th>
				<th>Amount</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["bal"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
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
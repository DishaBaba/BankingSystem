<?php
session_start();
$con=mysqli_connect('localhost','root','','table');
$q="select name from viewcust";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="trans.css">
	
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Disha"){
				 var arr=["Gauri","Kirti","Nandini","Shruti","Vaishnavi","Neeta","Sneha","Asha","Ansh"];
				 }
				 else if(a==="Gauri"){
					var arr=["Disha","Kirti","Nandini","Shruti","Vaishnavi","Neeta","Sneha","Asha","Ansh"];
				}
				else if(a==="Kirti"){
					var arr=["Gauri","Disha","Nandini","Shruti","Vaishnavi","Neeta","Sneha","Asha","Ansh"];
				}
				else if(a==="Nandini"){
					var arr=["Gauri","Kirti","Disha","Shruti","Vaishnavi","Neeta","Sneha","Asha","Ansh"];
				 }
				 else if(a==="Shruti"){
					var arr=["Gauri","Kirti","Nandini","Disha","Vaishnavi","Neeta","Sneha","Asha","Ansh"];
				 }
				 else if(a==="Vaishnavi"){
					var arr=["Gauri","Kirti","Nandini","Shruti","Disha","Neeta","Sneha","Asha","Ansh"];
				 }
				 else if(a==="Neeta"){
					var arr=["Gauri","Kirti","Nandini","Shruti","Vaishnavi","Disha","Sneha","Asha","Ansh"];
				 }
				 else if(a==="Sneha"){
					var arr=["Gauri","Kirti","Nandini","Shruti","Vaishnavi","Neeta","Disha","Asha","Ansh"];
				 }
				 else if(a==="Asha"){
					var arr=["Gauri","Kirti","Nandini","Shruti","Vaishnavi","Neeta","Sneha","Disha","Ansh"];
				 }
				 else if(a==="Ansh"){
				 var arr=["Gauri","Kirti","Nandini","Shruti","Vaishnavi","Neeta","Sneha","Asha","Disha"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
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

</style><h1 style=" font-size:45px;color:#3e3e3e;text-shadow: 1.5px 1.5px black;font-family: 'Open Sans',Sans-serif;">Transfer Amount</h1><br>
	
	<div class="table">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Disha">Disha</option>
			<option value="Gauri">Gauri</option>
			<option value="kirti">kirti</option>
            <option value="Nandini">Nandini</option>
			<option value="Shruti">Shruti</option>
			<option value="Vaishnavi">Vaishnavi</option>
			<option value="Neeta">Neeta</option>
			<option value="Sneha">Sneha</option>
			<option value="Asha">Asha</option>
			<option value="Ansh">Ansh</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;background:rgb(255, 228, 228);color:black;">
		</div>
	</form> 
        </div>
		<form action="secondpg.php" method="post">
			<!--div class="buttons">
				<button class="glow-on-hover" style=" font-family:Agency FB; font-size: 70px; color:#fff9ff;text-shadow: 2px 2px black;text-align: left;" type="submit" name="name">BACK</button>
			</div-->
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
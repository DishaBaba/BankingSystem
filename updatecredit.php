<?php
session_start();
$con=mysqli_connect('localhost','root','','table');
$name1=$_POST['sender'];
$q="select bal from viewcust where name='$name1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['bal'];
$from=$_POST['sender'];
$to=$_POST['receiver'];
$q1="select bal from viewcust where name='$to'";
$result1=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result1);
$var1=$row['bal'];
session_destroy();
if ( $var >= $_POST["transfer"] )
{
    $sub=$var-$_POST["transfer"];
    $q="update viewcust set bal='$sub' where name='$from' ";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["transfer"];
    $q="update viewcust set bal='$sum' where name='$to' ";
    $result=mysqli_query($con,$q);
	$c=$_POST["transfer"];
	$q="insert into transaction(sender,receiver,bal)
		values('$from','$to',$c)";
	$result=mysqli_query($con,$q);
    
        $message="Successful transfer";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    include 'secondpg.php';
    
}
else
{
    $message="Insufficient Balance";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    
    include 'secondpg.php';

}
?>
<?php
session_start();
$db=mysqli_connect("localhost","root","","authentication");
$mon=$_SESSION['month1'] ;
$yea=$_SESSION['year1'] ;
$approve='Y';
$sql1 = "UPDATE admin SET approve='$approve' WHERE month='$mon' and year='$yea'";
if(mysqli_query($db,$sql1)){
	header("location:login.php");
}
else{
	echo 'try again';
}
?>
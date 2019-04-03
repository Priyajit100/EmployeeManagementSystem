<?php
$db=mysqli_connect("localhost","root","","authentication");
if(isset($_POST['submit']) && !empty($_POST['month'])&& !empty($_POST['year'])&& !empty($_POST['username'])&& !empty($_POST['desig'])&& !empty($_POST['date'])){
$month=$_POST['month'];
$year=$_POST['year'];
$username=$_POST['username'];
$desig=$_POST['desig'];
$date=$_POST['date'];
$query=mysqli_query($db,"SELECT * FROM admin WHERE name ='$username'");
if(mysqli_num_rows($query)>0){
	echo 'Username already exists';
}
else{
		
$sql="INSERT INTO admin(month,year,name,desig,entrydate) VALUES('$month','$year','$username','$desig','$date')";
mysqli_query($db,$sql);
 header("location: login.php");


}
}

if(isset($_POST['submit']) && !empty($_POST['month1'])&& !empty($_POST['year1'])&& !empty($_POST['username1'])&& !empty($_POST['desig1'])&& !empty($_POST['date1'])){
$month1=$_POST['month1'];
$year1=$_POST['year1'];
$username1=$_POST['username1'];
$desig1=$_POST['desig1'];
$date1=$_POST['date1'];
$query1=mysqli_query($db,"SELECT * FROM admin WHERE name ='$username1'");
if(mysqli_num_rows($query1)>0){
	echo 'Username already exists';
}
else{
		
$sql1="INSERT INTO admin(month,year,name,desig,entrydate) VALUES('$month1','$year1','$username1','$desig1','$date1')";
mysqli_query($db,$sql1);
 header("location: login.php");


}
}
if(isset($_POST['submit']) && !empty($_POST['month2'])&& !empty($_POST['year2'])&& !empty($_POST['username2'])&& !empty($_POST['desig2'])&& !empty($_POST['date2'])){
$month2=$_POST['month2'];
$year2=$_POST['year2'];
$username2=$_POST['username2'];
$desig2=$_POST['desig2'];
$date2=$_POST['date2'];
$query2=mysqli_query($db,"SELECT * FROM admin WHERE name ='$username2'");
if(mysqli_num_rows($query2)>0){
	echo 'Username already exists';
}
else{
		
$sql2="INSERT INTO admin(month,year,name,desig,entrydate) VALUES('$month2','$year2','$username2','$desig2','$date2')";
mysqli_query($db,$sql2);
 header("location: login.php");


}
}

if(isset($_POST['submit']) && !empty($_POST['month3'])&& !empty($_POST['year3'])&& !empty($_POST['username3'])&& !empty($_POST['desig3'])&& !empty($_POST['date3'])){
$month3=$_POST['month3'];
$year3=$_POST['year3'];
$username3=$_POST['username3'];
$desig3=$_POST['desig3'];
$date3=$_POST['date3'];
$query3=mysqli_query($db,"SELECT * FROM admin WHERE name ='$username3'");
if(mysqli_num_rows($query3)>0){
	echo 'Username already exists';
}
else{
		
$sql3="INSERT INTO admin(month,year,name,desig,entrydate) VALUES('$month3','$year3','$username3','$desig3','$date3')";
mysqli_query($db,$sql3);
 header("location: login.php");


}
}

if(isset($_POST['submit']) && !empty($_POST['month4'])&& !empty($_POST['year4'])&& !empty($_POST['username4'])&& !empty($_POST['desig4'])&& !empty($_POST['date4'])){
$month4=$_POST['month4'];
$year4=$_POST['year4'];
$username4=$_POST['username4'];
$desig4=$_POST['desig4'];
$date4=$_POST['date4'];
$query4=mysqli_query($db,"SELECT * FROM admin WHERE name ='$username4'");
if(mysqli_num_rows($query4)>0){
	echo 'Username already exists';
}
else{
		
$sql4="INSERT INTO admin(month,year,name,desig,entrydate) VALUES('$month4','$year4','$username4','$desig4','$date4')";
mysqli_query($db,$sql4);
 header("location: login.php");


}
}
?>

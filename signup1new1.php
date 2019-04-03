<?php
ini_set('display_errors','1');
$db=mysqli_connect("localhost","root","","authentication");
if(isset($_POST['submit']) &&  !empty($_POST['username'])&& !empty($_POST['password'])&& !empty($_POST['type'])){
$username=$_POST['username'];
$password=$_POST['password'];
$type=$_POST['type'];
$query=mysqli_query($db,"SELECT * FROM users WHERE username='$username'");
if(mysqli_num_rows($query)>0){
	header("location:signup1.php");
}
else{
		
$sql="INSERT INTO users(username,password,type) VALUES('$username','$password','$type')";
 mysqli_query($db,$sql);

 header("location: login.php");

}
}
?>

<?php
session_start();


$db=mysqli_connect("localhost","root","","authentication");
//mysql_select_db("authentication");//
if(isset($_POST['login'])){
$username=$_POST['username'];
$password=$_POST['password'];
$type=$_POST['type'];

$ret="SELECT * FROM users where username='$username' and password='$password' and type='$type' ";
$result= mysqli_query($db,$ret);
$row=mysqli_fetch_assoc($result);
if($row['type']=='HOD' && $row['username']==$username && $row['password']==$password  )
{
	 header("location:rddashboard.php");
 
}
else if($row['type']=='EMP' && $row['username']==$username && $row['password']==$password ){
 header("location:rd.php");	

}
else{
	header("location:login.php");
}
}
?>
<html>
<head><center><image src="C:\Users\nEW u\Desktop\240_F_106684048_gPJgS2jgVly8isyXNPvwsduEpM7htiEP.jpg"/></center>
<title>Login</title>
<style type="text/css">
.containers{
	width:1150px;
		
}
.contain{
	width:1158px;

	
}
.contai{
	position:absolute;
	top:47%;
	left:45%;
}
.contai1{
	width:1060px;
}
body{
background-color:#13f2c5;
}
.button {
    background-color: #849900; /* Green */
    border: none;
    color: white;
    padding: 5px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}


</style>
</head>
<body>

   
<form action="login.php" method="POST">


<div class="containers"><p><center><strong>User name:</strong><input type="text" name="username"/></center></p></div>


<div class="contain"><p><center><strong>Password:</strong><input type="text" name="password"></center></p></div>
<div class="contai1"><p><center><strong>User type:
</strong> <select name="type">
                                             <option value="EMP">EMP</option>
                                        <option value="HOD">HOD</option>
                                           </center></p></div></select><br>
<div class="contai"><input type="submit"  name="login" class="button" value="Create User" ></div><br>

</form>
</div>
</body>
</html>
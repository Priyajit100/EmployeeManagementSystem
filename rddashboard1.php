<html>
<head><center>
<title>rd dashboard1</title>
<style type="text/css">
.cont{
	width:1100px;
		
}
.contain{
	width:1158px;

	
}
.contai{
	position:absolute;
	top:35%;
	left:30%;
}
.con{
	width:1210px;
}
body{
background-color:#fc8d0f;
}
.button2 {
    background-color: #e8df06; /* Green */
    border: none;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}


.contad{
	position:absolute;
	top:55%;
	left:50%;
}


</style>
</head>
<body>
<center>
<table width="600" border="1" cellpadding="1" cellspacing="1" class="contai">
<tr>
<th>Month</th>
<th>Year</th>
<th> Name</th>
<th>Designation</th>
<th>Entry date </th>
<th>Approve</th>

</tr>
</center>
<?php
session_start();
$db=mysqli_connect("localhost","root","","authentication");
//mysql_select_db("authentication");//
if(isset($_POST['submit'])){
$month=$_POST['month'];
$year=$_POST['year'];
$_SESSION['month1'] = "$month";
$_SESSION['year1'] = "$year";

$ret="SELECT * FROM admin where month='$month' and year='$year'and approve=''";
$result= mysqli_query($db,$ret);


if(mysqli_num_rows($result)>0){


 

	
	
 while ($row = mysqli_fetch_assoc($result)) {
	 echo "<tr>";
     echo "<td>".$row["month"]."</td>";
	 echo "<td>".$row["year"]."</td>";
	 echo "<td>".$row["name"]."</td>";
	 echo "<td>".$row["desig"]."</td>";
	 echo "<td>".$row["entrydate"]."</td>";
	 echo "<td>".$row["approve"]."</td>";
	 
    }



}
else{
header("location:error.php");	
}


}
?>


</body>
</html>
<html>
<body>

<form action="rddashboard2.php" method="POST">
<div class="contad"><center><strong><input type="submit"  name="submit"  value="Approve" class="button2"></strong></center></div>
	 </form>
	 
	 </body>
	 </html>



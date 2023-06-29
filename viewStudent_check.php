<?php

session_start();
if (!isset($_SESSION['username'])){
header("location:login.php"); 
}
elseif($_SESSION['usertype']=='user')
{
header("location:login.php");
} 

error_reporting(0);
session_start();

$host="localhost";

$user="root";

$password="";

$db="schoolproject";


$data=mysqli_connect($host,$user,$password,$db);

$sql ="select * from student";
$result= mysqli_query($data,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admission </title>
    	
    <?php 
include 'admin_css.php';
?>
	</head>
<body>

<?php 
include 'admin_sider.php';
?>

	<div class="content">
		<center>
		<h1>List of Student for admission</h1>
<table border="1px ">

<tr>
<th style="padding:20 px; font-size: 15px;" >Student Id</th>
    <th style="padding:20 px; font-size: 15px;" >Name</th>
    <th style="padding:20 px; font-size: 15px;">Email</th>
    <th style="padding:20 px; font-size: 15px;">Address</th>
    <th style="padding:20 px; font-size: 15px;">Age</th>
</tr>
<?php
while($info=$result ->fetch_assoc()){
?>
<tr>
    <td style="padding:20 px;"> 
<?php  echo  "{$info['stId']}"; ?>
</td>

<td style="padding:20 px;"> 
<?php  echo  "{$info['name']}"; ?>
</td>

    <td style="padding:20 px;"> 
    <?php  echo  "{$info['email']}"; ?>
</td>

    <td style="padding:20 px;">
    <?php  echo  "{$info['address']}"; ?>
</td>

    <td style="padding:20 px;"> 
    <?php  echo  "{$info['age']}"; ?>
</td>

</tr>

<?php
}
?>
</table>
</center>
	


	</div>

</body>
</html>

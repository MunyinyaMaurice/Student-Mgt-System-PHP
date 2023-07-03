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

$sql ="select * from teacher";
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
		<h1>List of Teachers</h1>

        <h5 style="color: green;"><?php 
        if($_SESSION['messages']){
echo $_SESSION['messages'];
        }
        unset($_SESSION['messages']);
        ?></h5>
<table border="1px ">

<tr>

    <th style="padding:20 px; font-size: 15px;" >Name</th>
    <th style="padding:20 px; font-size: 15px;">Email</th>
    <th style="padding:20 px; font-size: 15px;">Phone</th>
    <th style="padding:20 px; font-size: 15px;">Address</th>
    <th style="padding:20 px; font-size: 15px;">Image</th>
    <th style="padding:20 px; font-size: 15px; "colspan='2'>Action</th>
    
</tr>
<?php
while($info=$result ->fetch_assoc()){
?>
<tr>

<td style="padding:20 px;"> 
<?php  echo  "{$info['name']}"; ?>
</td>

    <td style="padding:20 px;"> 
    <?php  echo  "{$info['email']}"; ?>
</td>

<td style="padding:20 px;"> 
    <?php  echo  "{$info['phone']}"; ?>
</td>

    <td style="padding:20 px;">
    <?php  echo  "{$info['address']}"; ?>
</td>

<td style="padding:20 px;">
   <img src=" <?php  echo  "{$info['image']}"; ?>" width="75px"; height="80px";>
</td>

<td style="padding:20 px;">
  <?php  echo  "<a onclick=\" javascript:
   return confirm ('are you sure you want to delete this ?');\"
   href='deleteTeacher.php?teacher_id={$info['id']} '> Delete </a>"; ?>
</td>
<td style="padding:20 px;">
  <?php  echo  "<a onclick=\" javascript:
   return confirm ('are you sure you want to update this ?');\"
   href='updateTeacher.php?teacher_id={$info['id']} '> Update </a>"; ?>
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

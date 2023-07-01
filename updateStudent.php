<?php
error_reporting(0);
session_start();

$host="localhost";

$user="root";

$password="";

$db="schoolproject";


$data=mysqli_connect($host,$user,$password,$db);
$studId=$_GET['student_id'];

$sql="select * from student where stId='$studId'";

$result= mysqli_query($data,$sql);

$info=$result->fetch_assoc();

if(isset($_POST['update'])){

$name= $_POST['name'];
$email= $_POST['email'];
$address= $_POST['address'];
$age= $_POST['age'];

$sql ="update student set name='$name',email='$email',
address='$address',age='$age' where stId='$studId' ";

$result2=mysqli_query($data,$sql);

if($result2){
    $messages="Student updated sucessful !!!";
    $_SESSION['messages']=$messages;

    header("location:viewStudent.php");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
include 'admin_css.php';
?>
</head>
<body>

<?php 
include 'admin_sider.php';
?>
<center>
    <h1 class="adm">Update Student Form</h1>
	</center>
    
	<div align="center">
    <form action="#" method="post">
        <!-- <div class="adm_int">
<label class="label_text"> Student Id</label>
<input type="text" class="input_deg" id="stId" name="stId" >
</div> -->

<div class="adm_int">
<label class="label_text"> Name</label>
<input type="text" class="input_deg" id="name" name="name" value="<?php echo "{$info['name']}"; ?>" >
</div>

<div class="adm_int">
<label class="label_text"> Email</label>
<input type="email" class="input_deg"id="email" name="email" value="<?php echo "{$info['email']}"; ?>" >

<div class="adm_int">
<label class="label_text"> Address</label>
<input type="text" class="input_deg" id="address" name="address" value="<?php echo "{$info['address']}"; ?>">
</div>

<div class="adm_int">
<label class="label_text"> Age</label>
<input type="text" class="input_deg" id="age" name="age" value="<?php echo "{$info['age']}"; ?>">
</div>

<div class="adm_int">
<input type="submit" class="btn btn-primary" value="Update Student" name="update" id="submit">
</div>
    </form>
</div>

<footer>
    <h4 class="footer_text">All copy right@MunyinyaTech</h4>
</footer>
</body>
</html>
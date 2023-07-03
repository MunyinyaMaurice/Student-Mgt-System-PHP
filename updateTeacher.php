<?php
error_reporting(0);
session_start();

$host="localhost";

$user="root";

$password="";

$db="schoolproject";


$data=mysqli_connect($host,$user,$password,$db);
$T_Id=$_GET['teacher_id'];

$sql="select * from teacher where id='$T_Id'";

$result= mysqli_query($data,$sql);

$info=$result->fetch_assoc();

if(isset($_POST['update'])){

$id= $_POST['id'];
$name= $_POST['name'];
$email= $_POST['email'];
$address= $_POST['address'];
$phone= $_POST['phone'];
$file= $_FILES['image']['name'];
$dst="./image/".$file;
$dst_db="image/".$file;

move_uploaded_file($_FILES['image']['tmp_name'], $dst);


if($file){
    $sql2 ="update teacher set name='$name',email='$email',
    address='$address',phone='$phone',image='$dst_db' where id='$id' ";
}else{
    $sql2 ="update teacher set name='$name',email='$email',
address='$address',phone='$phone' where id='$id' ";
}

$result2=mysqli_query($data,$sql2);

if($result2){
    $messages="Teacher updated sucessful !!!";
    $_SESSION['messages']=$messages;

    header("location:viewTeacher.php");
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
    <h1 class="adm">Update Teacher Form</h1>
	</center>
    
	<div align="center">
    <form action="updateTeacher.php" method="post" enctype="multipart/form-data">
        <!-- <div class="adm_int">
<label class="label_text"> Student Id</label>
<input type="text" class="input_deg" id="stId" name="stId" >
</div> -->
<input type="text" class="input_deg" id="id" name="id" value="<?php echo "{$info['id']}"; ?>" hidden>

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
<label class="label_text"> Phone</label>
<input type="text" class="input_deg" id="phone" name="phone" value="<?php echo "{$info['phone']}"; ?>">
</div>

<div class="adm_int">
<label class="label_text"> Old Image</label>
<img src="<?php echo "{$info['image']}"; ?>" width="75px" height="80px"></label>
</div>

<div class="adm_int">
<label class="label_text">New Image </label>
<input type="file" class="input_deg" name="image" >
</div>

<div class="adm_int">
<input type="submit" class="btn btn-primary" value="Update Teacher" name="update" id="submit">
</div>
    </form>
</div>

<footer>
    <h4 class="footer_text">All copy right@MunyinyaTech</h4>
</footer>
</body>
</html>
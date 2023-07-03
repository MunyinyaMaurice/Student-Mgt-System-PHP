<?php 
error_reporting(0);
session_start();

$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);

if($data===false){
echo ("connection error!");
}
if($_GET['teacher_id']){
$t_id=$_GET['teacher_id'];
$sql="delete from teacher where id='$t_id'";
$result=mysqli_query($data,$sql);

if($result){
    $messages="teacher deleted !";
    $_SESSION['messages']=$messages;
header("location:viewTeacher.php");
}

}
?>
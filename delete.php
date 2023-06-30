<?php
error_reporting(0);
session_start();

$host="localhost";

$user="root";

$password="";

$db="schoolproject";


$data=mysqli_connect($host,$user,$password,$db);
if($_GET['student_id']){

$studId=$_GET['student_id'];

$sql ="delete from student where stId='$studId' ";

$result= mysqli_query($data,$sql);

if($result){
    $messages="Student Deleted sucessful !!!";
    $_SESSION['messages']=$messages;

    header("location:viewStudent.php");
}
}
?>
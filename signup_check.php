<?php 
$id = $_POST['id'];
$username = $_POST['username'];
$usertype = $_POST['usertype'];
$password = $_POST['password'];

$email = $_POST['email'];
$phone = $_POST['phone'];

// db connection
$conn = new mysqli('localhost','root','','schoolproject');
if ($conn ->connect_error){
    die('connection failed : ' +$conn->connect_error);  
}else{
    $st = $conn->prepare("insert into user(id,username,usertype,password,email,phone) values(?,?,?,?,?,?)");
    $st -> bind_param("sssssi",$id,$username,$usertype,$password,$email,$phone);
    $st ->execute();
    echo "success..!!";
    $st ->close();
    $conn ->close();
}
?>
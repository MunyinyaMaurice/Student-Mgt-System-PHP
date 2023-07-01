<?php

error_reporting(0);
session_start();

$host = "localhost";

$user = "root";

$password = "";

$db = "schoolproject";


$data = mysqli_connect($host, $user, $password, $db);


if ($data === false) {
    die("connection error");
}

if (isset($_POST['addStudent'])) {
    $stId = $_POST['stId'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $age = $_POST['age'];

    $sql = "insert into student (stId,name,email,address,age) values('$stId','$name','$email','$address','$age')";

    $result = mysqli_query($data, $sql);

    if ($result) {

        $message = "Inserted successful !!!";
        $_SESSION['message'] = $message;
        header("location:viewStudent.php");

    } else {
        $message = "sorry it is not inserted somthing went wrong !!!";
        $_SESSION['message'] = $message;
        header("location:login.php");
    }
}
?>
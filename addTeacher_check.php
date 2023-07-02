<?php
error_reporting(0);
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";
$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die('connection error');
}
if (isset($_POST['addTeacher'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $file = $_FILES['image']['name'];

    // from this Destination (folder called 'image')
    $dst = "./image/" . $file;

    // where it will be svaed in database
    $dst_db = "image/" . $file;

    move_uploaded_file($_FILES['image']['tmp_name'], $dst);

    $sql = "insert into teacher (name,email,phone,address,image)
values ('$name','$email','$phone','$address','$dst_db')";

    $result = mysqli_query($data, $sql);

    if ($result) {
        $msg = "Teacher inserted successful !!!";
        $_SESSION['msg'] = $msg;
        header("location:viewTeacher.php");
    } else {
        $msg = "Teacher failed to be inserted !!!";
        $_SESSION['msg'] = $msg;
        header("location:addTeacher.php");
    }
}
?>
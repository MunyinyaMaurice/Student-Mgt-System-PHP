 <?php 

// error_reporting(0);
// session_start();

// $host="localhost";

// $user="root";

// $password="";

// $db="schoolproject";


// $data=mysqli_connect($host,$user,$password,$db);


// if($data===false)
// {
// 	die("connection error");
// }

		
// 	if(isset($_POST['apply']))
// 	{
// 		$name = $_POST['name'];

// 		$email = $_POST['email'];
//         $phone = $_POST['phone'];

// 		$message = $_POST['message'];


// 		$sql="insert into admission (name, email, phone, message) 
//         values ('$name', '$email', '$phone', '$message')";

// 		$result=mysqli_query($data,$sql);

// 		// $row=mysqli_fetch_array($result);



// 		if($result)
// 		{
//             $messag="Submitted succusesfuly!!";
// 			$_SESSION['message']=$messag;
            
// 			header("location:index.php");
// 		}

// 		else
// 		{
			

// 			$message= "sorry!!";

// 			$_SESSION['message']=$message;

// 			header("location:login.php");
// 		}


// 	}

?> 


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

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['apply'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "insert into admission (name, email, phone, message) values ('$name', '$email', '$phone', '$message')";
    $result = mysqli_query($data, $sql);

    if ($result) {
        // Connection successful and data inserted, now send the email
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'munyinyaTech@gmail.com';
        $mail->Password = 'tmvikzqbguyxwgdc';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('munyinyaTech@gmail.com');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Admission Application';
        $mail->Body = "Dear $name, <br><br>Thank you for applying for admission. Your application has been received successfully. We will review your application and contact you shortly.<br><br>Regards,<br>School Administration";
        $mail->send();

        $_SESSION['message'] = "Submitted successfully!";
        header("location: index.php");
        exit;
    } else {
        // Error occurred while inserting data into the database
        $_SESSION['message'] = "Sorry, an error occurred!";
        header("location: login.php");
        exit;
    }
}
?>

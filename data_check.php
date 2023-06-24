<?php 

error_reporting(0);
session_start();

$host="localhost";

$user="root";

$password="";

$db="schoolproject";


$data=mysqli_connect($host,$user,$password,$db);


if($data===false)
{
	die("connection error");
}

		
	if(isset($_POST['apply']))
	{
		$name = $_POST['name'];

		$email = $_POST['email'];
        $phone = $_POST['phone'];

		$message = $_POST['message'];


		$sql="insert into admission (name, email, phone, message) 
        values ('$name', '$email', '$phone', '$message')";

		$result=mysqli_query($data,$sql);

		// $row=mysqli_fetch_array($result);



		if($result)
		{
            $messag="Submitted succusesfuly!!";
			$_SESSION['message']=$messag;
            
			header("location:index.php");
		}

		else
		{
			

			$message= "sorry!!";

			$_SESSION['message']=$message;

			header("location:login.php");
		}


	}

?>
<?php
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
$message= $_SESSION['message'];
echo "<script type='text/javascript'>
alert('$message');
</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Document</title>
    <link rel ="stylesheet" type="text/css" href="style.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <nav> 
    <label class="logo">W-School</label>
        <ul>
            <li>
                Home
            </li>
            <li>
                Contact 
            </li>
            <li>
                Admission
            </li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
            <li><a href="signup.php" class="btn btn-success">Sign up</a></li>
        </ul>
    </nav>
    
    <div class="section1">
        <label class="img_text">We Teach with Care</label>
        <img class="main_img" src="school_management.jpg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <img class="welcome_img" src="school2.jpg">
            </div>

            <div class="col-md-8">
            <h1>Welcome to W-School</h1>

<p>MEMS has been committed to global learning long before it became an indispensable feature of contemporary education. Established in 1997, we proudly stand as the 1st English medium school in Bangladesh to adopt both Pearson Edexcel and Cambridge curriculum (in O and A levels), drawing together students in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.MEMS has been committed to global learning long before it became an indispensable feature of contemporary education. Established in 1997, we proudly stand as the 1st English medium school in Bangladesh to adopt both Pearson Edexcel and Cambridge curriculum (in O and A levels), drawing together students in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
            </div>
        </div>
    
    </div>
    <center>
		<h1>Our Teachers</h1>
	</center>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <img class="teacher" src="teacher1.jpg">
            <p>in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
            </div>

            <div class="col-md-4">
            <img class="teacher" src="teacher2.jpg">
            <p>in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
            </div>

            <div class="col-md-4">
            <img class="teacher" src="teacher3.jpg">
            <p>in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
            </div>            
        </div>
    
    </div>

    <center>
		<h1>Our Courses</h1>
	</center>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <img class="teacher" src="graphic.jpg">
            <p>Graphics and Design</p>
            </div>

            <div class="col-md-4">
            <img class="teacher" src="web.jpg">
            <p>Web Developement</p>
            </div>

            <div class="col-md-4">
            <img class="teacher" src="marketing.png">
            <p>Marketing</p>
            </div>            
        </div>
    </div>
  
    <center>
    <h1 class="adm">Admission Form</h1>
	</center>
    
	<div align="center">
    <form action="data_check.php" method="post">
        <div class="adm_int">
<label class="label_text"> Name</label>
<input type="text" class="input_deg" id="name" name="name" >
</div>

<div class="adm_int">
<label class="label_text"> Email</label>
<input type="email" class="input_deg" id="email" name="email" >
</div>

<div class="adm_int">
<label class="label_text"> Phone</label>
<input type="text" class="input_deg"id="phone" name="phone" >

<div class="adm_int">
<label class="label_text"> Message</label>
<textarea class="input_txt" name="message"></textarea>
</div>
<div class="adm_int">
<input type="submit" class="btn btn-primary" value="Apply" name="apply" id="submit">
</div>
    </form>
</div>

</body>
<footer>
    <h4 class="footer_text">All copy right@MunyinyaTech</h4>
</footer>
</html>
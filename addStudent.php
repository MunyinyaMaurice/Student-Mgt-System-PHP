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
    <h1 class="adm">Student Form</h1>
	</center>
    
	<div align="center">
    <form action="addStudent_check.php" method="post">
        <div class="adm_int">
<label class="label_text"> Student Id</label>
<input type="text" class="input_deg" id="stId" name="stId" >
</div>

<div class="adm_int">
<label class="label_text"> Name</label>
<input type="text" class="input_deg" id="name" name="name" >
</div>

<div class="adm_int">
<label class="label_text"> Email</label>
<input type="email" class="input_deg"id="email" name="email" >

<div class="adm_int">
<label class="label_text"> Address</label>
<input type="text" class="input_deg" id="address" name="address" >
</div>

<div class="adm_int">
<label class="label_text"> Age</label>
<input type="text" class="input_deg" id="age" name="age" >
</div>

<div class="adm_int">
<input type="submit" class="btn btn-primary" value="Add Student" name="addStudent" id="submit">
</div>
    </form>
</div>

<footer>
    <h4 class="footer_text">All copy right@MunyinyaTech</h4>
</footer>
</body>
</html>
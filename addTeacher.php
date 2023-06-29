<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add teacher</title>
    <?php 
include 'admin_css.php';
?>
</head>
<body>

<?php 
include 'admin_sider.php';
?>
<center>
    <h1 class="adm">Teacher Form</h1>
	</center>
    
	<div align="center">
    <form action="addTeacher_check.php" method="post">
        <div class="adm_int">
<label class="label_text"> Teacher Name</label>
<input type="text" class="input_deg" id="name" name="name" >
</div>

<div class="adm_int">
<label class="label_text"> Email</label>
<input type="email" class="input_deg"id="email" name="email" >

<div class="adm_int">
<label class="label_text"> Phone</label>
<input type="text" class="input_deg" id="phone" name="phone" >
</div>

<div class="adm_int">
<label class="label_text"> Address</label>
<input type="text" class="input_deg" id="address" name="address" >
</div>


<div class="adm_int">
<input type="submit" class="btn btn-primary" value="Add Teacher" name="addTeacher" id="submit">
</div>
    </form>
</div>

<footer>
    <h4 class="footer_text">All copy right@MunyinyaTech</h4>
</footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<center>
    <h1 class="adm">Admission Form</h1>
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
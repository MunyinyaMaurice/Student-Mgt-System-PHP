<?php
session_start();
if (!isset($_SESSION['username'])){
header("location:login.php"); 
}
elseif($_SESSION['usertype']=='user')
{
header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	
<?php 
include 'admin_css.php';
?>

	</head>
<body>

<?php 
include 'admin_sider.php';
?>

	<div class="content">
		
		<h1>Sidebar Accordion</h1>

		<p>In this example, we have added an accordion and a dropdown menu inside the side navigation.

		Click on both to understand how they differ from each other. The accordion will push down the content, while the dropdown lays over the content.</p>

		<input type="text" name="">


	</div>

</body>
</html>

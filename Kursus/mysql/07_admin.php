<?php 
session_start();
if(!isset($_SESSION['tuvastamine'])){
    header('Location: 07_login.php');
    exit();
}
if(isset($_POST['logout'])){
	session_destroy();
	header('Location: 07_admin.php');
	exit();
}
?>
<h1>Admin</h1>
<form action="07_logout.php" method="post">
	<input type="submit" value="Logi välja" name="logout">
</form>
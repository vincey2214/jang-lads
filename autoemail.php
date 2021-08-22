<?php
if(isset($_GET['email'])){
	$email = $_GET['email'];
	echo $email;
	$_SESSION['email'] = $email;
}
elseif (!empty($_SESSION['email'])) {
	echo $_SESSION['email'];
}
?>
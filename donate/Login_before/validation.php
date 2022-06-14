<?php

session_start();

$con = mysqli_connect('localhost','root','','farm_login');

$name = $_POST['usr'];
$pass = $_POST['pwd'];

$s = " select * from login_reg_details where reg_user_name = '$name' && reg_password = '$pass'";
$test = " select reg_id from login_reg_details where reg_user_name = '$name' && reg_password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['reg_name'] = $name;

	$result_1 = mysqli_query($con, $test);
	$test = mysqli_fetch_array($result_1);
	$_SESSION['val_id'] = $test[0];

	header('location: ../login_later/home.php');
}
else{
	//echo "<script>alert('Incorrect username or password!')</script>";
	header('location: login.html');
}

?>
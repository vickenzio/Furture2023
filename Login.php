<?php

$con = mysqli_connect('localhost', 'root', '','FurtureDB');

$txtEmail = $_POST['email'];
$txtPassword = $_POST['password'];

$sql = "INSERT INTO `login` (`ID`, `Email`, `Password`) VALUES ('0', '$txtEmail', '$txtPassword')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Login Success";
}

?>
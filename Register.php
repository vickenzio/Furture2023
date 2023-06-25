<?php

$con = mysqli_connect('localhost', 'root', '','FurtureDB');

$txtNamaDepan = $_POST['namadepan'];
$txtNamaBelakang = $_POST['namabelakang'];
$txtEmail = $_POST['email'];
$txtPassword = $_POST['password'];
$txtPassword2 = $_POST['password2'];

$sql = "INSERT INTO `register` (`ID`, `NamaDepan`,`NamaBelakang`, `Email`, `Password`, `Password2`) VALUES ('0', '$txtNamaDepan', '$txtNamaBelakang', '$txtEmail', '$txtPassword', '$txtPassword2')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Records Inserted";
}

?>
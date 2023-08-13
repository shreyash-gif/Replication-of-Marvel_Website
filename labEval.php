<?php

$con = mysqli_connect('localhost', 'root', '','test');

$email1 = $_POST['email1'];
$name1 = $_POST['name1'];
$msg = $_POST['msg'];
// $LName = $_POST['LName'];
// $Gender = $_POST['Gender'];
// $Country = $_POST['Country'];

$sql = "INSERT INTO `tablename` (`email1`, `name1`, `msg`) VALUES ('$email1', '$name1', '$msg')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
?>
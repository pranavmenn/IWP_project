<?php

session_start();
header('location:login.php');
$con=mysqli_connect('localhost','root','qwertyuiop');
mysqli_select_db($con,'iwp');
$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from usertable where name='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num>0){
	echo "Username already taken";
	
}
else{
	$reg="INSERT INTO usertable(name,password) values ('$name','$pass')";
	mysqli_query($con,$reg);
	echo "Registration Successful";
}
?>
<?php

header('location:home.php');
$con=mysqli_connect('localhost','root','qwertyuiop');
mysqli_select_db($con,'iwp');
$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['email'];
$d=$_POST['comments'];

$reg="INSERT INTO contact values ('$a','$b','$c','$d')";
	mysqli_query($con,$reg);
?>
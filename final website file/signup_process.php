<?php

require_once("connection.php");

setcookie('username_for_arduino',' ',time()-1000);
setcookie('id_for_arduino',' ',time()-1000);

if(isset($_POST['submit']) && !empty($_POST['username'])&& !empty($_POST['password'])){

$username=$_POST['username'];
$password=$_POST['password'];



$query="insert into users_table (username,password) values ('$username','$password')";

$result=mysqli_query($dbc,$query) or die('error in inserting');

$query2="select * from users_table where password='$password' ";
$result2=mysqli_query($dbc,$query2) or die ('error in retreiving');

$row=mysqli_fetch_array($result2);

$id=$row['id'];
mysqli_close($dbc);
setcookie('username_for_arduino',$username,time()+1000);
setcookie('id_for_arduino',$id,time()+1000);









	
	}


	header("Location:home.php");











?>
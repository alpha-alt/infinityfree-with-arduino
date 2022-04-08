<?php



require_once("connection.php");


$query="delete from users_table";
$query2="insert into users_table (id,username,password) values ('1','admin','admin')";

$result=mysqli_query($dbc,$query)or die("error in deleting");

$result2=mysqli_query($dbc,$query2)or die("error in inserting");

mysqli_close($dbc);

if($result2){

   
  header("Location:home.php");


}else{



    echo "error in deleting";
}














?>
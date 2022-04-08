<?php




require_once("connection.php");


$query="delete from ticket";

$result=mysqli_query($dbc,$query)or die("error in deleting");

mysqli_close($dbc);

if($result){

   
  header("Location:home.php");


}else{



    echo "error in deleting";
}







?>
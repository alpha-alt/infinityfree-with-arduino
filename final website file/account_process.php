<?php
require_once("connection.php");
if(!empty($_POST['account'])){

  
$value=$_POST['account'];

$users=$_COOKIE['id_for_arduino'];
echo $users;
$query="select * from users_table where id = '$users' ";
$result=mysqli_query($dbc,$query)or die ("error in reteriving");

if(mysqli_num_rows($result) == 1){
echo "got something";
//	$query="insert into payed values ('$data1','$data2') ";
//$result=mysqli_query($dbc,$query)or die ("error in inserting");
$row=mysqli_fetch_array($result);

	
	
	
	$query="update users_table SET account='$value' where id='$users'";
$result=mysqli_query($dbc,$query)or die ("error in updating");

mysqli_close($dbc);
 header("Location:home.php");

}else{

echo "something wrong";
}






}else{

    echo "not donga";
}
mysqli_close($dbc);
?>
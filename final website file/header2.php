<?php


require_once("connection.php");


//echo('database connected');





if(isset($_GET['first'])&&isset($_GET['second'])){



    $first=$_GET['first'];
$second=$_GET['second'];

if(!empty($first)&& !empty($second)){


$query="select * from users_table where account = '$first' ";
$result=mysqli_query($dbc,$query)or die ("error in reteriving");

if(mysqli_num_rows($result) == 1){
echo "got someting";
$row=mysqli_fetch_array($result);
	$value=(int)$row['balance']+(int)$second;
	
	$query="update users_table SET balance='$value' where account='$first'";
$result=mysqli_query($dbc,$query)or die ("error in updating");

mysqli_close($dbc);
 header("Location:home.php");
}else{

echo "error no match";
}



}else{

echo "empty";
}

}else{
if(isset($_GET['third'])){
//echo "something";
   $va=(int)$_GET['third'];
echo "$va";
    if($va==2){
    	$query="update location SET current_location='$va' where train='1'";
$result=mysqli_query($dbc,$query)or die ("error in updating");

    }else if($va==3){
          	$query="update location SET current_location='$va',status='1' where train='1'";
$result=mysqli_query($dbc,$query)or die ("error in updating");
    }else if($va==1){
          	$query="update location SET current_location='$va',status='0' where train='1'";
$result=mysqli_query($dbc,$query)or die ("error in updating");
    }


    if($va==5){
    	$query="update location SET current_location='$va' where train='2'";
$result=mysqli_query($dbc,$query)or die ("error in updating");

    }else if($va==6){
          	$query="update location SET current_location='$va',status='1' where train='2'";
$result=mysqli_query($dbc,$query)or die ("error in updating");
    }else if($va==4){
          	$query="update location SET current_location='$va',status='0' where train='2'";
$result=mysqli_query($dbc,$query)or die ("error in updating");
    }



    if($va==8){
    	$query="update location SET current_location='$va' where train='3'";
$result=mysqli_query($dbc,$query)or die ("error in updating");

    }else if($va==9){
          	$query="update location SET current_location='$va',status='1' where train='3'";
$result=mysqli_query($dbc,$query)or die ("error in updating");
    }else if($va==7){
          	$query="update location SET current_location='$va',status='0' where train='3'";
$result=mysqli_query($dbc,$query)or die ("error in updating");
    }

 
    }

//echo "error from the start";
}




mysqli_close($dbc);
?>
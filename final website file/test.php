

<?php


require_once("connection.php");










if(isset($_POST['submit'])){

$value1=$_POST['starting'];

$value2=$_POST['destination'];
$id=$_POST['id_of_custumer'];
$id2=$_COOKIE['id_for_arduino'];




if($value1 != $value2 ){



		

	if($id!= null){


	$query="insert into ticket (id,station) values ('$id','$value1')";

$result=mysqli_query($dbc,$query) or die('error in inserting');

	mysqli_close($dbc);

    
		echo "<p id='p'> payed for custumer with an id of  ".$id."</p>";
		echo "</br>";
	}else{





	$query="insert into ticket (id,station) values ('$id2','$value1')";

$result=mysqli_query($dbc,$query) or die('error in inserting');

	mysqli_close($dbc);

        

		echo "<p id='p'> payed successfully </p>";
		

	}
	echo "<p id='p'> starting at station  ".$value1."</p>";
   
	echo "<p  id='p'> destinaton at station  ".$value2."</p>";




$value1=10 * $value1;
		$value2=10 * $value2;

	if($value1>$value2){

		


		echo "<p id='p'> balance is ".($value1-$value2)."</p>";

	}else{


		echo "<p  id='p'> balance is ".($value2-$value1)."</p>";

	}

	$_POST['starting']='ping';



$url="last.php?id=$id && value1=$value1 && value2=$value2";



header("Location: ".$url);
}else{


	echo "invalid input stations must not be the same";
}



}else{

	header("Location:home.php");
}







?>

</html>
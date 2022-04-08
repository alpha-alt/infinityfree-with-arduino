

<!DOCTYPE html>
<html>
<head>
	



	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >

<style type="text/css">
	@media (max-width:700px){
	
	*{

		
		margin:0;
		min-width: 200px;

	}


body{

background-color: #413f3b;
text-align:center;

}

#content{

	
	margin-right:10%;
	margin-left: 10%;
	margin-top:40%;
	color:white;
	font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;
}

p{
    border-radius: 10px;
	margin-bottom: 20px;
	padding:10px;
	border:1px solid white;
	border-right: 3px solid white;
	border-bottom:3px solid white;
}
}


@media (min-width:700px){







	*{

		
		margin:0;
		min-width: 200px;

	}


body{

background-color: #413f3b;
text-align:center;

}

#content{

	
	margin-right:10%;
	margin-left: 10%;
	
	color:white;
	font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;
}

p{
    border-radius: 10px;
	margin-bottom: 20px;
	padding:10px;
	border:1px solid white;
	border-right: 3px solid white;
	border-bottom:3px solid white;
	color:white;
	font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;
}

#wrapper{

	margin-right: 30%;
	margin-left: 30%;
	
	margin-top:15%;
	padding-top:2%;

	border-right: 3px solid white;
	border-left: 3px solid white;
	border-radius: 30px;
	padding-bottom: 1%;
}







}


</style>


</head>




















<?php



$id=$_GET['id'];
$value1=$_GET['value1'];
$value2=$_GET['value2'];
$value3=$value1;
$value4=$value2;

if($id==' '){

    $id=$_COOKIE['id_for_arduino'];
}

echo"<div id='wrapper'>";

echo"<body>";
echo"<div id='content'>";

if(isset($_COOKIE['username_for_arduino']) && ($value1 != $value2)){

if($id!=null){
echo "<p id='p'> payed for custumer with an id of  ".$id."</p>";
		echo "</br>";

}else{


		echo "<p id='p'> payed successfully </p>";
}



		
$value3=$value1/10;
		$value4=$value2/10;


		echo "<p id='p'> starting at station  ".$value3."</p>";
   
	echo "<p  id='p'> destinaton at station  ".$value4."</p>";

	if($value1>$value2){

		


		echo "<p id='p'> balance is ".($value1-$value2)."</p>";

	}else{


		echo "<p  id='p'> balance is ".($value2-$value1)."</p>";

	}
		


}else{


	header("location: home.php");
}

echo "</div>";
echo"</body>";
echo"</div>";
?>



</html>
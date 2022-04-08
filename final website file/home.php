<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >

<style type="text/css">
	@media (max-width:700px){
	
	*{

		
		margin:0;
	}


body{

background-color: #413f3b;
	text-align: center;

	font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;
    border:1px solid white;

}

h2{

font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;
	color:red;
	background-color: white;



}




#submit{

font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;
	height:30px;
	border-radius: 10px;
	margin-top:10px;
	margin-right:40%;
	margin-left: 40%;
	background-color: #413f3b;
	color:white;
	border:1px solid white;
	border-right:3px solid white;
	border-bottom:3px solid white;
}
#container{
margin-right:20%;
	margin-left: 20%;
	margin-top:10%;
	text-align: center;
	border-right:3px solid white;
		border-left:3px solid white;
	padding-top:10px;
	border-radius:10px;
}

a{

	color:white;
	font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;
	text-decoration: none;


	text-align: center;
	

}
form{

}
p{
color:white;
	font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;
	text-decoration: none;
	margin-bottom: 4px;

}

#approve{

	font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;
  
  border-radius: 10px;
  height:35px;
  width:100px;
	background-color: #413f3b;
	color:white;
	border:1px solid white;
	border-right:3px solid white;
	border-bottom:3px solid white;
	margin-top:10%;
}

footer{


	border-bottom:3px solid white;
	margin-right:10%;
	margin-left:10%;
	text-align: center;
	margin-top: 20%;
	padding-bottom: 7px;
}

#top_container{

	
	margin-top:10%;

margin-right:20%;
	margin-left: 20%;
}

.top{
	display: inline;
}
.top_submit{

	font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;
  
  border-radius: 10px;
  height:35px;
  
	background-color: #413f3b;
	color:white;
	border:1px solid white;
	border-right:3px solid white;
	border-bottom:3px solid white;
    margin-right:9px;
    margin-top:1%;
}

#id{
margin-right:10%;
	margin-left: 10%;
	border-bottom:3px solid white;
	margin-top:10%;
	padding-bottom: 6px;
	font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;

  color:white;
border:1px solid white;

}

#image_button{


	border:1px soid white;


margin-top:10%;
margin-left:60%;

}

}








	@media (min-width:700px){





*{

		
		margin:0;

	

		margin-right: 10%;
		margin-left: 10%;

		
	}


body{

background-color: #413f3b;
	text-align: center;

	font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;
     border:1px solid white;

}








#submit{

font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;
	height:30px;
	border-radius: 10px;
	margin-top:10px;
	margin-right:40%;
	margin-left: 40%;
	background-color: #413f3b;
	color:white;
	border:1px solid white;
	border-right:3px solid white;
	border-bottom:3px solid white;
}
#container{
margin-right:20%;
	margin-left: 20%;
	margin-top:10%;
	text-align: center;
	border-right:3px solid white;
		border-left:3px solid white;
	padding-top:10px;
	border-radius:10px;

	

}

a{

	color:white;
	font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;
	text-decoration: none;


	text-align: center;
	

}

#wrapper{
	border-right:6px solid white;
	border-left:6px solid white;
	border-radius: 20px;

	margin-top:3%;
	margin-bottom:10%;
	
}
form{

}
p{
color:white;
	font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;
	text-decoration: none;
	margin-bottom: 4px;

}

#approve{

	font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;
  
  border-radius: 10px;
  height:35px;
  width:100px;
	background-color: #413f3b;
	color:white;
	border:1px solid white;
	border-right:3px solid white;
	border-bottom:3px solid white;
	margin-top:10%;
}

footer{


	border-bottom:3px solid white;
	margin-right:10%;
	margin-left:10%;
	text-align: center;
	margin-top: 15%;
	padding-bottom: 7px;
}

#top_container{

	
	margin-top:10%;


	
}

.top{
	    padding-left:0px;
	    display:inline;
       

}
.top_submit{

	font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;

  border-radius: 10px;
  height:35px;
  
	background-color: #413f3b;
	color:white;
	border:1px solid white;
	border-right:3px solid white;
	border-bottom:3px solid white;
      margin-right:1%;
      margin-left:1%;
      margin-top:1%;
}

#id{
margin-right:10%;
	margin-left: 10%;
	border-bottom:3px solid white;
	margin-top:10%;
	padding-bottom: 6px;
	font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;

  color:white;
 
  border:1px solid white;
  
}

h2{

font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;
	color:red;
	background-color: white;



}




h4{

}


#image_button{


	border:1px soid white;


margin-top:10%;
margin-left:100%;

}

#balance {
    border:1px solid white;
}
.h4{
    border:1px soild white;
}

	}

</style>



	</head>




<?php


$file=fopen("uploads/last_known_location.txt", "r") ;

$read=fread($file, 1);

fclose($file);






echo"<div id='wrapper'>";
if(isset($_COOKIE['username_for_arduino']) ) {
    $id=$_COOKIE['id_for_arduino'];
    require_once("connection.php");
    $query="select * from users_table where id = '$id' ";
    $result=mysqli_query($dbc,$query)or die ("error in reteriving");

if(mysqli_num_rows($result) == 1){

$row=mysqli_fetch_array($result);
$account=$row['account'];
$balance=$row['balance'];
echo"<h2>"."(".$account.")"." balance ".$balance."br </h2>";
}else{
    echo "<h2>error </h2> ";
}
    mysqli_close($dbc);
 

if($read!=null){
	echo "<h2>  Train under Maintainance </h2>";
     $display=0;
	}else{

		$display=1;



echo"</div>";
	}


echo"<body>";

echo"<div id='id'>";

echo"<h4 class='header'  > your coustumer id is ". $_COOKIE['id_for_arduino']." </h4>";




if($display ==1) {
echo"<form class='top' action='readfile.php' method='post'>";

echo"<input class='top_submit' type='submit' value='info location'  />";

echo"</form>";

echo"<form class='top' action='setaccount.php' method='post'>";

echo"<input class='top_submit' type='submit' value='set account' name='submit'/>";

echo"</form>";

}
if($_COOKIE['id_for_arduino']==1){
echo"<div id='top_container'>";
echo"<form class='top' action='delete_record.php' method='post'>";

echo"<input class='top_submit' type='submit' value='delete record' name='submit'/>";

echo"</form>";



echo"<form class='top' action='readdata.php' method='post'>";

echo"<input class='top_submit' type='submit' value='read data' name='submit'/>";

echo"</form>";


echo"<form class='top' action='delete_users.php' method='post'>";

echo"<input class='top_submit' type='submit' value='delete users' name='submit'/>";

echo"</form>";

echo"<form class='top' action='update.php' method='post'>";

echo"<input class='top_submit' type='submit' value='update' name='submit'/>";

echo"</form>";


echo"</div>";

echo"</div>";




}
echo"<div id='container'>";
echo"<form action='test.php' method='post'>";
echo"<div id='top'>";

echo"<p> Ticket for another custumer </p> <input type ='number' name='id_of_custumer' />"; 
echo"</div>";

echo"</br>";
echo"<div id='one'>";
echo"<p> Starting </p>";
echo"<select name='starting'>";
echo"<option value='1'> station 1  </option>";
echo"<option value='2'> station 2  </option>";
echo"<option value='3'> station 3  </option>";
echo"<option value='4'> station 4  </option>";
echo"<option value='5'> station 5  </option>";
echo"<option value='6'> station 6  </option>";
echo"<option value='7'> station 7  </option>";
echo"<option value='8'> station 8  </option>";
echo"<option value='9'> station 9  </option>";
echo"<option value='10'> station 10  </option>";

echo"</select>";
echo"</div>";
echo"</br>";

echo"<div id='two'>";
echo"<p> Destination </p>";
echo"<select name='destination'>";
echo"<option value='1'> station 1  </option>";
echo"<option value='2'> station 2  </option>";
echo"<option value='3'> station 3  </option>";
echo"<option value='4'> station 4  </option>";
echo"<option value='5'> station 5  </option>";
echo"<option value='6'> station 6  </option>";
echo"<option value='7'> station 7  </option>";
echo"<option value='8'> station 8  </option>";
echo"<option value='9'> station 9  </option>";
echo"<option value='10'> station 10  </option>";

echo"</select>";
echo"</div>";
echo"</br>";

echo"</div>";
echo"<input id='approve' type='submit' name='submit' value='approve' >";
echo"</form>";

echo"</body>";

echo"<footer>";
	
 echo"<a href='logout.php'> Logout (".$_COOKIE['username_for_arduino'].") </a>";


echo"</footer>";







 echo"</br>";
 echo"</br>";


} else {


	echo"<a href='signup.php'> Sign up </a>";
} 


echo"</div";

?>





















</html>
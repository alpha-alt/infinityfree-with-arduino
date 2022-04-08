
<html>


<head>


	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >

<style type="text/css">
	


@media (max-width:700px){

*{

		
		margin:0;

	

		
		
	}


	#wrapper{

       border:3px solid white;
       margin-top: 20%;
       text-align: center;
       border-radius: 10px;


	}

	body{

background-color: #413f3b;
	text-align: center;

	font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;
	color :white;

}


a{
    text-decoration:none;
}



h1{


	margin-bottom: 10px;
	padding:10px;
}

table{


	background-color:white;
	color:black;
}


}

@media (min-width:700px){

*{

		
		margin:0;

	

		margin-right: 10%;
		margin-left: 10%;

		
	}


	#wrapper{

       border:3px solid white;
       margin-top: 10%;
       text-align: center;
       border-radius: 10px;


	}

	body{

background-color: #413f3b;
	text-align: center;

	font-family: sans-serif;
     font-style: normal;
	font-weight: lighter;
	color :white;

}



th{


	padding :8px;
	padding-left: 13px;
	

}

table{


	border:3px solid white;
	margin-left:15%;
	padding:10px;
	border-radius: 10px;
	background-color:white;
	color:black;

}

tr{


}

h1{


	margin-bottom: 10px;
	padding:10px;
}

a{
    text-decoration:none;
}


}








</style>






</head>







<?php
require_once("connection.php");
/**
//$file=fopen("uploads/train_location.txt",'r')or die("error in opening");
$train=fread($file,1);
$train=fread($file,1);
$train1=fread($file,1);
$train=fread($file,1);
$train1_status=fread($file, 1);
$train=fread($file,1);
$train2=fread($file, 1);
$train=fread($file,1);
$train2_status=fread($file, 1);
$train=fread($file,1);
$train3=fread($file, 1);
$train=fread($file,1);
$train3_status=fread($file, 1);



fclose($file);

**/



$query="select * from location";
$result=mysqli_query($dbc,$query)or die ("error in reteriving");


if(mysqli_num_rows($result) == 3){

$row=mysqli_fetch_array($result);
	$train1=$row['current_location'];
    $train1_status=$row['status'];

    
$row=mysqli_fetch_array($result);
	$train2=$row['current_location'];
    $train2_status=$row['status'];

    $row=mysqli_fetch_array($result);
	$train3=$row['current_location'];
    $train3_status=$row['status'];



}

	
mysqli_close($dbc);
?>

<div id="wrapper">

<h1> Train Location </h1>

<table>

<tr>

<th>
</th>


<th scope='col'> Train to Arrive



</th>

<th scope='col'> minutes to arrive

</th>


<th scope='col'> Train at

</th>


</tr>




<tr>
<th scope='row'>Station 1

<td> <?php $var=1;  if($train1==2 && $train1_status==1) {echo "<a href='https://www.google.com/maps/dir/9.040753953231981, 38.742729755445204/9.034755478241607, 38.73141342376109' target='blank'> here </a>";}  ?></td>


	<td>  <?php  if($train1==2 && $train1_status==0) {echo "30 minutes";} elseif ($train1==3) {echo "20 minutes";
		# code...
	}elseif ($train1==2 && $train1_status==1) {echo "10 minutes";
		# code...
	} ?> </td>

	<td> <?php  $var=1;     if(($var==$train1)|| ($var==$train2)|| ($var==$train3)){
		$train_to_arrive=2;
	echo "<a href='https://www.google.com/maps/dir/9.035829782915856, 38.752417805227594/9.034252785273866, 38.734267764463844' target='blank'>here</a>"; } ?>    </td>

</th>

</tr>


<tr>
<th scope='row'>Station 2

<td> <?php $var=2;  if(($train1==1 && $train1_status==0)||($train1==3 && $train1_status==1)) {echo "<a href='https://www.google.com/maps/dir/9.035829782915856, 38.752417805227594/9.034252785273866, 38.734267764463844' target='blank'>here</a>";}  ?></td>


	<td>   <?php  if($train1==1) {echo "10 minutes";} elseif ($train1==3) {echo "10 minutes";
		# code...
	} ?> </td>

	<td> <?php  $var=2;     if(($var==$train1)|| ($var==$train2)|| ($var==$train3)){
	echo "<a href='https://www.google.com/maps/dir/9.034465191244674, 38.73836699677795/9.040753953231981, 38.742729755445204' target='blank'> here </a>"; } ?>    </td>

</th>

</tr>


<tr>
<th scope='row'>Station 3

<td> <?php $var=3;  if(($train1==2 && $train1_status==0)) {echo "<a href='https://www.google.com/maps/dir/9.034465191244674, 38.73836699677795/9.040753953231981, 38.742729755445204' target='blank'> here </a>";}  ?></td>

	<td>   <?php  if($train1==1 && $train1_status==0) {echo "20 minutes";} elseif ($train1==2 && $train1_status==0) {echo "10 minutes";
		# code...
	}elseif ($train1==2 && $train1_status==1) {echo "30 minutes";
		# code...
	} ?></td>

	<td> <?php  $var=3;     if(($var==$train1)|| ($var==$train2)|| ($var==$train3)){
	echo "<a href='https://www.google.com/maps/dir/9.040753953231981, 38.742729755445204/9.034755478241607, 38.73141342376109' target='blank'> here </a>"; } ?>    </td>

</th>


</tr>



<tr>
<th scope='row'>Station 4


<td> <?php $var=4;  if(($train2==5 && $train2_status==1)) {echo "<a href='https://www.google.com/maps/dir/9.02133392554756, 38.733117871483046/9.015586826792454, 38.73469768328646' target='blank'> here </a>";}  ?></td>
	<td>  <?php  if($train2==5 && $train2_status==0) {echo "30 minutes";} elseif ($train2==6) {echo "20 minutes";
		# code...
	}elseif ($train2==5 && $train2_status==1) {echo "10 minutes";
		# code...
	} ?></td>

	<td> <?php  $var=4;     if(($var==$train1)|| ($var==$train2)|| ($var==$train3)){
	echo "<a href='https://www.google.com/maps/dir/9.034755478241607, 38.73141342376109/9.02143223533199, 38.73337268328644' target='blank'> here </a>"; } ?>    </td>
</th>


</tr>

<tr>
<th scope='row'>Station 5

<td> <?php $var=5;  if(($train2==4 && $train2_status==0)||($train2==6 && $train2_status==1)) {echo "<a href='https://www.google.com/maps/dir/9.034755478241607, 38.73141342376109/9.02143223533199, 38.73337268328644' target='blank'> here </a>";}  ?></td>
	<td>  <?php  if($train2==4 && $train2_status==0) {echo "10 minutes";} elseif ($train2==6) {echo "10 minutes";
		# code...
	} ?></td>

	<td> <?php  $var=5;     if(($var==$train1)|| ($var==$train2)|| ($var==$train3)){
	echo "<a href='https://www.google.com/maps/dir/9.01540243380197, 38.73457501516153/9.02133392554756, 38.733117871483046' target='blank'> here </a>"; } ?>    </td>
</th>


</tr>


<tr>
<th scope='row'>Station 6


<td> <?php $var=6;  if(($train2==5 && $train2_status==0)) {echo "<a href='https://www.google.com/maps/dir/9.01540243380197, 38.73457501516153/9.02133392554756, 38.733117871483046' target='blank'> here </a>";}  ?></td>
	<td> <?php  if($train2==4 && $train2_status==0) {echo "20 minutes";} elseif ($train2==5 && $train2_status==0) {echo "10 minutes";
		# code...
	}elseif ($train2==5 && $train2_status==1) {echo "30 minutes";
		# code...
	} ?></td>

	<td> <?php  $var=6;     if(($var==$train1)|| ($var==$train2)|| ($var==$train3)){
	echo "<a href='https://www.google.com/maps/dir/9.02133392554756, 38.733117871483046/9.015586826792454, 38.73469768328646' target='blank'> here </a>"; } ?>    </td>
</th>


</tr>



<tr>
<th scope='row'>Station 7

<td> <?php $var=7;  if(($train3==8 && $train3_status==1)) {echo "<a href='https://www.google.com/maps/dir/9.016264622708928, 38.72803102561407/9.01155125045325, 38.722786010269616' target='blank'> here </a>";}  ?></td>
	<td>  <?php  if($train3==8 && $train3_status==0) {echo "30 minutes";} elseif ($train3==9) {echo "20 minutes";
		# code...
	}elseif ($train3==8 && $train3_status==1) {echo "10 minutes";
		# code...
	} ?></td>

	<td> <?php  $var=7;     if(($var==$train1)|| ($var==$train2)|| ($var==$train3)){
	echo "<a href='https://www.google.com/maps/dir/9.015586826792454, 38.73469768328646/9.011485532546128, 38.73590068143351' target='blank'> here </a>"; } ?>    </td>
</th>


</tr>


<tr>
<th scope='row'>Station 8

<td> <?php $var=8;  if(($train3==7 && $train3_status==0)||($train3==9 && $train3_status==1)) {echo "<a href='https://www.google.com/maps/dir/9.015586826792454, 38.73469768328646/9.011485532546128, 38.73590068143351' target='blank'> here </a>";}  ?></td>
<td>  <?php  if($train3==7) {echo "10 minutes";} elseif ($train3==9) {echo "10 minutes";
		# code...
	} ?>  </td>
	<td> <?php  $var=8;     if(($var==$train1)|| ($var==$train2)|| ($var==$train3)){
	echo "<a href='https://www.google.com/maps/dir/9.011485532546128, 38.73590068143351/9.016264622708928, 38.72803102561407' target='blank'> here </a>"; } ?>    </td>
</th>


</tr>


<tr>
<th scope='row'>Station 9
<td> <?php $var=9;  if(($train3==8 && $train3_status==0)) {echo "<a href='https://www.google.com/maps/dir/9.011485532546128, 38.73590068143351/9.016264622708928, 38.72803102561407' target='blank'> here </a>";}  ?></td>
	<td><?php  if($train3==7 && $train3_status==0) {echo "20 minutes";} elseif ($train3==8 && $train3_status==0) {echo "10 minutes";
		# code...
	}elseif ($train3==8 && $train3_status==1) {echo "30 minutes";
		# code...
	} ?></td>

	<td> <?php  $var=9;     if(($var==$train1)|| ($var==$train2)|| ($var==$train3)){
	echo "<a href='https://www.google.com/maps/dir/9.016264622708928, 38.72803102561407/9.01155125045325, 38.722786010269616' target='blank'> here </a>"; } ?>    </td>

</th>


</tr>


















</table>
</br>

</div>





























</html>


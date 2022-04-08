<html>
<head>
<meta http-equiv="refresh" content="5">
</head>
<h1> hi there </h1>
<?php

  require_once("connection.php");
    	$query="select * from location";
        $result=mysqli_query($dbc,$query);

        $row=mysqli_fetch_array($result);
        

$first=$row[current_location];
//echo $row['train'];
//echo("$first");
$row=mysqli_fetch_array($result);
$second=$row[current_location];
//echo("$second");
$row=mysqli_fetch_array($result);
$third=$row[current_location];
//echo("$third");


mysqli_close($dbc);




$file=fopen("uploads/train_location.txt",'w')or die("error in opening");
fwrite($file,$first);
fwrite($file,' ');
fwrite($file,$second);
fwrite($file,' ');
fwrite($file,$third);
fwrite($file,' ');

fclose($file);


// header("Location:hellow2.php");







?>

<script>
var delayInMilliseconds = 2000; //1 second

setTimeout(function() {
  //your code to be executed after 1 second


 window.location.href = "hellow2.php";


//document.location.reload(true);

}, 3000);


setTimeout(function() {
  //your code to be executed after 1 second





document.location.reload(true);

}, 10000);


</script>






</html>

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

}

input{
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
	margin-top:5px;
}


#wrapper{



	margin-top:50%;
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

}









#wrapper{
	border-right:6px solid white;
	border-left:6px solid white;
	border-radius: 20px;

	margin-top:15%;
	margin-bottom:10%;
	
}


input{
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
	margin-top:5px;
}









	}








</style>


</head>

<div id="wrapper">

<form action="echo_file.php" method="post" enctype="multipart/form-data">
    <input type="file"  name="file" value=" file to upload">
    <input type="submit"  value="upload" name="submit" />
    </form>
  </br>
</br>
    <form action="reset_file.php" method="post" enctype="multipart/form-data">
   
    <input type="submit"  value="reset" name="submit" />
    </form>
 </br>
</br>
<form action="echo_file2.php" method="post" enctype="multipart/form-data">
    <input type="file"  name="file" value=" file to upload">
    <input type="submit"  value="upload" name="submit" />
    </form>

     </br>
</br>
    <form action="reset_file2.php" method="post" enctype="multipart/form-data">
   
    <input type="submit"  value="reset" name="submit" />
    </form>
 </div>
</html>


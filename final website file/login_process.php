<?php

require_once("connection.php");
setcookie('username_for_arduino',' ',time()-1000);
setcookie('id_for_arduino',' ',time()-1000);

if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])){

$username=$_POST['username'];  
        $password=$_POST['password'];

 $query="select * from users_table ";
 $result=mysqli_query($dbc,$query)or die("error in retreiving");

 while($row=mysqli_fetch_array($result)){

              
              if($row['username']==$username){

                 if ($row['password']==$password) {

                 setcookie('username_for_arduino',$username,time()+30000);

setcookie('id_for_arduino',$row['id'],time()+30000);
mysqli_close($dbc);

$variable=1;
break;

                 	# code...
                 }

              }



	
	}


if($variable==1){

  header("Location:home.php");

}else{

   header("Location:login.php");
}


echo("error dhosdfjlksjd flkjsd flkjslk");




	}else{

    header("Location:login.php");
  }











?>
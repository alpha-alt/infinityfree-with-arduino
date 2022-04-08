



<?php


if(isset($_POST['submit'])){

	$file=$_FILES['file'];
//	print_r($file);

  $fileName=$_FILES['file']['name'];

  $fileTmpName=$_FILES['file']['tmp_name'];
   $fileSize=$_FILES['file']['size'];

  $fileError=$_FILES['file']['error'];
   

  $fileType=$_FILES['file']['type'];

  $fileExt=explode('.', $fileName);

  $fileActualExt = strtolower(end($fileExt));

  $allowed =array('txt');

  if (in_array($fileActualExt, $allowed)) {

  	if ($fileError === 0) {

  		if($fileSize <10000){



$fileDestination  ='uploads/last_known_location.txt';

move_uploaded_file($fileTmpName,$fileDestination)or die('error in uploading') ;


header("location: home.php");


  		}else{


  			echo "your file is too big" ;
  		}
  		# code...
  	}else{

  		echo "there was an error uploading your file";
  	}
  	# code...
  }else{

  	echo "you cannot upload files of this type!";
  }




}

?>
<?php

  session_start();
  
  $name = $_POST["name"];
  $Phone = $_POST["phone"];
  $Message = $_POST["message"];
  
  //Database connection 
  $conn = new mysqli('localhost','root','','contact');
  
  $s = "INSERT INTO `contact1`(`name`, `phone`, `message`) VALUES ('$name','$Phone','$Message')";

$result = mysqli_query($conn,$s);

$num= mysqli_num_rows($result);

if($num == 1){
	  //echo "Succesfully...";
    readfile("ecomm.html");
    //database connection for the entry of user
   
    }


else{
	  echo "fail...";

}
 
?>
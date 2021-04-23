<?php

  session_start();
  
  $email = $_POST["email"];
  $password = $_POST["password"];
  
  //Database connection 
  $conn = new mysqli('localhost','root','','phone');
  
  $s = "select * from user1 where email= '$email' && password= '$password'";

$result = mysqli_query($conn,$s);

$num= mysqli_num_rows($result);

if($num == 1){
	  //echo "Succesfully...";
    readfile("ecomm.html");
    //database connection for the entry of user
   
    }


else{
	  echo "check your password or mail...";

}
 
?>
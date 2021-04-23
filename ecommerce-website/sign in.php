<?php

  session_start();
  
  $email = $_POST["email"];
  $password = $_POST["password"];
  
  //Database connection 

  $conn = new mysqli('localhost','root','','phone');

  $s = "select * from user1 where email = '$email'";

  $result = mysqli_query($conn,$s); 

  $num = mysqli_num_rows($result);
  $fecth = mysqli_fetch_array($result);
  
if($s == $fecth){
	echo "email already taken ";
    //readfile("ecomm.html");

    
}

else{
	  $reg = "INSERT INTO `user1`(`email`, `password`) VALUES ('$email','$password')";
    $result2 = mysqli_query($conn,$reg);
    $num2 = mysqli_num_rows($result2);

}
 
?>
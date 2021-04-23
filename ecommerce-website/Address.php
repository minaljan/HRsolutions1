<?php

  session_start();
  
 
 // $first_name = isset($_POST['first name']) ? $_POST['first name'] : '';
  
 // $last_name = isset($_POST['last name']) ? $_POST['last name'] : '';
  $first_name = $_POST['first name'];
  print_r($first_name);
  exit;
  $state = $_POST["state"];
  $city = $_POST["city"];
  $home_town = $_POST["home-town"];
  $address = $_POST["address"];
  
  //Database connection 
  $conn = new mysqli('localhost','root','','Address');
  
  $s = "INSERT INTO `address1`(`first name`, `last name`, `state`, `city`, `home-town`, `address`) VALUES ('[$first_name]','[$last_name]','[$state]','[$city]','[$home_town]','[$address]')";

$result = mysqli_query($conn,$s);

$num= mysqli_num_rows($result);

if($num == 1){
	echo "Succesfully...";
    //readfile("ecomm.html");
    //database connection for the entry of user
   
    }


else{
	  echo "fail...";

}
 
?>
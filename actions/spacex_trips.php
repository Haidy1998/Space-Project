<?php

include "../connection.php";
include "../include/User.php";


session_start();

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_SESSION['user_id'])) { 
         

     $id = $_SESSION['user_id'];
     $trip_id = $_POST['trip'];

  
   
    
    $sql = "INSERT INTO `users_trips` (`user_id`,`trip_id`) VALUES ('$id','$trip_id');";
    $run = mysqli_query($connection, $sql);

    
       echo "You Reserved The Trip Sucessfully";  
    }
    else 
    
 
          echo "you must register or log in first"; 
      
  }
  ?>
   
  

   

      
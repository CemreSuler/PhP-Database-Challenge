<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"SELECT * FROM passenger_information WHERE passenger_username = '$user_check' ");
 
   $row = mysqli_fetch_array($ses_sql);
   
  
   $final_username = $row['passenger_username'];
   $final_email = $row['passenger_email'];
   $final_city = $row['passenger_city'];
   $final_firstname = $row['passenger_firstname'];
   $final_lastname = $row['passenger_lastname'];
    $final_geslacht = $row['passenger_gender'];
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>
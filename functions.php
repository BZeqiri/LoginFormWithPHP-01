<?php
  //reading if session value exist (if not it redirect to login)
  function check_login($con){
     if( isset($_SESSION['user_id'])){
         $id=$_SESSION['user_id'];
         $query= "select * from users where user_id=$id limit 1";
         $result = mysqli_query($con, $query);
         if($result && mysqli_num_rows($result)>0){
             //returns users data
             $user_data=mysqli_fetch_assoc($result);
             return $user_data;

         }
     }
     //redirect to login
     header("Location:Login.php");
     die;
  }
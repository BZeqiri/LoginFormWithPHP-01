<?php
session_start();

   include("connection.php");
   include("functions.php");

   if($_SERVER['REQUEST_METHOD'] == "POST"){
       //something was posted
      $user_name = $_POST['user_name'];
      $password = $_POST['password'];

      if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
          //save to database
          $user_id = random_num(20);

          $pass = password_hash($password, PASSWORD_DEFAULT);

          $query = "insert into users (user_id, user_name, password) values('$user_id', '$user_name', '$pass')";
          mysqli_query($con, $query);
         header("Location: login.php");
          die;
          $quey = "insert into user () values()";
      }
      else{
          echo "Please enter valid information";
      }
   }
      
?>
<DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
    </head>
    <body>
        <style type="text/css">
           #text{
               height: 35px;
               margin-top: 5px;
               border-radius: 5px;
               padding: 4px;
               border: solid thin #aaa;
               width: 100%;
           }
           #button{
               padding: 10px;
               margin-left: 300px;
               border-radius: 5px;
               width: 100px;
               color: white;
               background-color: lightseagreen;
               border: none;
           }
           #box{
               background-color: lightblue;
               border-radius: 10px;
               margin: 300px auto;
               width: 400px;
               height: 190px;
               padding: 20px;
           }
           #su{
               margin-left: 325px;
   
           }
          
           
        </style>
        <div id="box">
            <form method="POST">
                <div style="font-size:25px; text-align:center; color:aliceblue; ">Register</div>
                <input id="text" type="text" name="user_name"><br>
                <input id="text" type="password" name="password"><br><br>
                <input id="button" type="submit" value="Register"><br><br>
                <a id="su"  href="login.php">Login</a>
            </form>

        </div>
    </body>
</html>    

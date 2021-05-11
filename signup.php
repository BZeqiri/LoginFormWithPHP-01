<?php
session_start();
   include("connection.php");
   include("functions.php");
      
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
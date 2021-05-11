<?php
   session_start();
   
   include("connection.php");
   include("functions.php");

   $user_data=check_login($con);
?>
<DOCTYPE html>
<html>
    <head>
        <title>FirstRegisterLogin(TEST)</title>
    </head>
    <body>
        <a href="logout.php">Logout</a>
        <h1>Index page</h1>
        <br>
        you are: 
    </body>
</html>

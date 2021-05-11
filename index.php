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
        <style>
            #logout{
                margin-left: 95%;
                text-decoration: none;
                border: 1px solid red;
                border-radius: 5px;
                padding: 4px;
                color: purple;
                background-color:pink;
            }
            h1{
                font-size: 60px;
                text-align: center;
               margin-top: 300px;
               border: 4px solid black;
               border-radius:15px;
            }
            h4{
                text-align: center;
                padding-top: 6px;
                border: 2px solid black;
                border-radius:5px;
                width: 200px;
                height: 24px;
                margin: auto;

            }
            @media only screen and (min-width: 520px){
                #logout{
                    margin-left: 92%;
                }
            }
        </style>
        <a id="logout" href="logout.php">Logout</a>
        <h1>Welcome</h1>
        <br>
       <h4> you are: <?php echo $user_data['user_name'];?></h4>
    </body>
</html>

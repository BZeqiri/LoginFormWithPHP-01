<?php

?>
<DOCTYPE html>
<html>
    <head>
        <title>Login</title>
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
                <div style="font-size:25px; text-align:center; color:aliceblue; ">Login</div>
                <input id="text" type="text" name="user_name"><br>
                <input id="text" type="password" name="password"><br><br>
                <input id="button" type="submit" value="Login"><br><br>
                <a id="su"  href="signup.php">Sugnup</a>
            </form>

        </div>
    </body>
</html>    
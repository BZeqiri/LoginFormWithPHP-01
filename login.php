<?php

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST"){
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result){
				if($result && mysqli_num_rows($result) > 0){

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password){

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}
        else
		{
			echo "wrong username or password!";
		}
	}

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
               box-shadow: 1px 1px 3px 3px grey;
           }
           #register-login{
               margin-left: 330px;
               text-decoration: none;
               border: 1px solid green;
               border-radius: 5px;
               padding: 7px;
               color: black;
           }
          
           
        </style>
        <div id="box">
            <form method="POST">
                <div style="font-size:25px; text-align:center; color:aliceblue; ">Login</div>
                <input id="text" placeholder="emri dhe mbiemri" type="text" name="user_name"><br>
                <input id="text" placeholder="password" type="password" name="password"><br><br>
                <input id="button" type="submit" value="Login"><br><br>
                <a id="register-login"  href="signup.php">Register</a>
            </form>

        </div>
    </body>
</html>    
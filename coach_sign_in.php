<?php
    // if they click go back send back to main page
    if (isset($_POST['go_back'])):
        header("Location: mainpagewau.php");
    endif;

    //if they click submit then connects to wconnection.php 
    if  (isset($_POST['submit'])):
        require_once('wconnection.php');
        //sets variables 
        $user_name=$_POST['username'];
        $password=$_POST['password'];
        
        //selects a query where username and password both exits and then executes it and stores it in result variable
        $my_query="SELECT * FROM administration WHERE  username = '$user_name' AND password = '$password'";
        $result= mysqli_query($conn, $my_query);

        //either print appropriate error message or sends to appropriate location
        if (!$result)
        {
            die("Query failed: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($result) == 1 ) 
        {       
            header("Location: coach_main_page.php");
            exit();
        } 

        else
        { 
            echo "<p>Invalid username or password.</p>";
        }

        mysqli_close($conn);  
    endif;
?>

<html>
    <head>
        <style>

        </style>
    </head>
    <body>
        <!--Creates a form that allows for user input username and password -->
        <h1 style="text-align: center;"> Coach Sign In</h1>

        <form action="" method="post">
            <p>Username: <input type="text" name="username" id="username" size="25" /></p>
            <p>Password:<input type="password"name="password"  id="password"size="25" /></p>
            <p><input type="submit" name="submit" value="Sign In"/></p>
        </form>
        <!--Go back button-->
        <form method="POST" action="">
            <p>  <input type="submit" name="go_back" value="Go Back"></p>
         </form>
    </body>
</html>




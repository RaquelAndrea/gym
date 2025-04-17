
<?php
    // if they click go back send back to main page
    if (isset($_POST['go_back'])):
        header("Location: mainpagewau.php");
    endif;

    //if they click submit then connects to wconnection.php 
    if  (isset($_POST['Login'])):
        require_once('wconnection.php');
        //sets variables 
        $user_name = $_POST['username'];
        $password = md5($_POST['password']);

        //selects a query where username and password both exits and then executes it and stores it in result variable
        $my_query = "SELECT * FROM administration WHERE username = '$user_name' AND password = '$password'";
        $result = mysqli_query($conn, $my_query);

        //either print appropriate error message or sends to appropriate location
        if (!$result)
        {
            die("Query failed: " . mysqli_error($conn));
        }
        if (mysqli_num_rows($result) == 1) 
        {       
            header("Location: coach_main_page.php");
            exit();
        }    
        else 
        { 
            $error = "Invalid username or password.";   
        }

        mysqli_close($conn);  
    endif;
?>
<html>
    <head>
        <style>
            input[type="text"],input[type="password"] 
            {
                width: 100%;
                padding: 3%;
                font-size: 100%;
                box-sizing: border-box;
            }

            input.full-width
            {
            width: 100%;
            padding: 3%;
            font-size: 100%;
            box-sizing: border-box;
            }
        </style>
           <link rel="stylesheet" href="master.css">
    </head>
    <body>
        <div class="banner">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT243RYpMJZ7i_O8XB1NJMTlB2ZybjjLCrTVg&s" alt="WAU logo" />
            <h1>Sign In</h1>
        </div>
    
        <div class="container">
            <form action="" method="post">
                <p>Username: <br/> <input type="text" name="username" id="username" size="25" /></p>
                <p>Password: <br/><input type="password"name="password"  id="password"size="25" /></p>
                <p><input type="submit" name="Login" value="Login" class="full-width"/></p>
            </form>
            <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
        </div>
               
        <!--Go back button-->
        <div style="text-align: right;">
            <form method="POST" action="">
                <!--<p>  <input type="submit" name="go_back" value="Go Back"></p>-->
                <input type="submit" name="go_back" value="Go Back" class="go_back">
            </form>
        </div>
        
    </body>
</html>



<?php
    if (isset($_POST['go_back'])):
        header("Location: mainpagewau.php");
        exit;
    endif;

    if (isset($_POST['submit'])):
        require_once('wconnection.php');
        $user_id = $_POST['user_id'];

        $my_query = "SELECT * FROM gym_user WHERE user_id = '$user_id'";
        $result = mysqli_query($conn, $my_query);

        if (!$result)
        {
            echo "Failed";
            die("Query failed: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($result) == 1) 
        {

            $check_query = "SELECT * FROM crowd_meter 
                        WHERE user_id = '$user_id' 
                        AND time_entry >= NOW() - INTERVAL 2 HOUR";
            $check_result = mysqli_query($conn, $check_query);

            if (mysqli_num_rows($check_result) == 0) 
            {
     
                $current_time = date('Y-m-d H:i:s');
                $insert_query = "INSERT INTO crowd_meter (user_id, time_entry) 
                                 VALUES ('$user_id', '$current_time')";
                mysqli_query($conn, $insert_query);
            }

 
            header("Location: successfullylogin_withcss.php");
            exit();
        } 
        else 
        {
            header("Location: invalid_id_withcss.php");
            exit();
        }

        mysqli_close($conn);
    endif;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign In</title>
        <link rel="stylesheet" href="master.css">
    </head>
    <body>
        <div class="banner">         
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT243RYpMJZ7i_O8XB1NJMTlB2ZybjjLCrTVg&s" alt="WAU logo" />
            <h1>Sign In</h1>
        </div>   

        <div class="container">
            <form action="" method="post">
                <p>Enter ID: <input type="text" name="user_id" id="user_id" size="25" class="full-width" /></p>
                <p>
                    <input type="checkbox" id="terms-agreement" name="terms-agreement" required>
                    <label for="terms-agreement">
                        I agree to the <a href="terms_and_conditions.php" target="_blank">Terms and Conditions</a>
                    </label>
                </p>
                <p><input type="submit" name="submit" value="Sign In" class="full-width" /></p>
            </form>
        </div>

        <div style="text-align: right;">
            <form method="POST" action="">
                <input type="submit" name="go_back" value="Go Back" class="go_back">
            </form>
        </div>
    </body>
</html>

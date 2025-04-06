<?php


if (isset($_POST['go_back'])):
    header("Location: mainpagewau.php");
endif;


if  (isset($_POST['submit'])):
    require_once('wconnection.php');
    $user_id=$_POST['user_id'];


    $my_query = "SELECT * FROM gym_user WHERE user_id = '$user_id'";
    
   
    $result= mysqli_query($conn, $my_query);
    if (!$result) {
         echo "faillled";
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) == 1 ) {
        
        header("Location: successfullylogin.php");
        exit();
    } else {
      
        header("Location: invalid_id.php");
        exit();
    }
    

mysqli_close($conn);  
 
endif;
?>
<Html>
    <head>
    </head>

    <h1 style="text-align: center;"> Sign In</h1>

    <form action="" method="post">
    <p>Enter ID: <input type="text" name="user_id" id="user_id" size="25" /></p>
    <p><input type="submit" name="submit" value="Sign In"/></p>
    </form>

<form method="POST" action="">
  <p>  <input type="submit" name="go_back" value="Go Back"></p>
</form>
  

   
</html>



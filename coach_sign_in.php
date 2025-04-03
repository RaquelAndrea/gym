<?php


if (isset($_POST['go_back'])):
    header("Location: mainpagewau.php");
endif;


if  (isset($_POST['submit'])):
    require_once('wconnection.php');
    $user_name=$_POST['user_name'];
    $password=md5($_POST['password']);
   
    $my_query="SELECT * FROM administration WHERE user_name = '$user_name' AND password = '$password'";
    
   
    $result= mysqli_query($conn, $my_query);
   echo mysqli_error($conn);
   
   if ($result && mysqli_num_rows($result) > 0) {

    header("Location:coach_main_page.php");
    exit(); 
      

    }
    
    else:
        echo "ERROR: Invaild username or password ";
    endif;
 
mysqli_close($conn);  
 
endif;
?>
<Html>
    <head>
    </head>

    <h1 style="text-align: center;"> Coach Sign In</h1>

    <form action="" method="post">
    <p>Username: <input type="text" name="username" id="username" size="25" /></p>
    <p>Password:<input type="password"name="password"  id="password"size="25" /></p>
    <p><input type="submit" name="submit" value="Sign In"/></p>
    </form>

<form method="POST" action="">
  <p>  <input type="submit" name="go_back" value="Go Back"></p>
</form>
  

   
</html>



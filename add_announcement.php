<?php
    if (isset($_POST['go_back'])):
        header("Location: change_announcement.php");
        exit;
    endif;

    if (isset($_POST['submit'])):

        require_once('wconnection.php');
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $schedule_id = $_POST['schedule_id'];
        $announcemnt = $_POST['announcement'];
  
        $my_query = "SELECT * FROM schedule WHERE schedule_id = $schedule_id";
        $result = mysqli_query($conn, $my_query);

        if (mysqli_num_rows($result) > 0) 
        {
            echo "Try again <br> Can't enter duplicate ID number";
        } 
    
        else 
        {
            $insert_sql= "INSERT INTO schedule (schedule_id, start_date, end_date, announcement_text) VALUES ('$schedule_id', '$start_date','$end_date', '$announcemnt')"; 
        
            if(mysqli_query($conn, $insert_sql)) 
            {
                echo " Anouncement has been successfully uploaded";
            } 
    
            else
            {
                echo "Error can't upload";
            }
            
        }
        mysqli_close($conn);
    endif;
?>
<html>
    <head>
        <link rel="stylesheet" href="master.css">     
    </head>
    <body>
        <div class="banner">  
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT243RYpMJZ7i_O8XB1NJMTlB2ZybjjLCrTVg&s" alt="WAU logo" />
            <h1>Announcements</h1>
        </div>
        
        <div  class="container" style="text-align: left" >  
            <form action="" method="post">
            <p>Special Announcements :</p>
            <p><textarea id="announcement" name="announcement" rows="4" cols="50"></textarea></p>
            <p> Start Date: <input type= "date" name="start_date"  id="start_date" required /></p>
            <p> End Date: <input type= "date" name="end_date"  id="end_date" required/></p>
            <p> Enter ID: <input type= "number" name="schedule_id"  id="schedule_id" size="25" required/></p>
            <p><input type="submit" name="submit" value="Submit"/></p>
            </form>
        </div>
        
        <form method="POST" action="">
            <p>  <input type="submit" name="go_back" value="Go Back" class="go_back"></p>
        </form>
    </body>
</html>
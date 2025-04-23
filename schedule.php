<?php
    require_once('wconnection.php');

    if (isset($_POST['go_back'])):
        header("Location: mainpagewau.php");
        exit;
    endif;

    $today = date('Y-m-d');
    $my_query = "SELECT * FROM schedule WHERE '$today' BETWEEN start_date AND end_date";
    $result = mysqli_query($conn, $my_query);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Schedule</title>
        <style>
            .announcement 
            {
                color: red;
                text-align: left; 
                margin: 20px auto;
                max-width: 80%;
            }
        </style>
        <link rel="stylesheet" href="master.css">      
    </head>
    <body>
        <div class="banner">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT243RYpMJZ7i_O8XB1NJMTlB2ZybjjLCrTVg&s" alt="WAU logo" width="100"/>
            <h1>Schedule</h1>
        </div>
        <div class="container">
        <h2 style="text-align: center;"> Hours</h1>
        <?php 
            if (mysqli_num_rows($result) > 0): 
                while ($row = mysqli_fetch_assoc($result)): 
                    echo "<p class='announcement'> * " . $row['announcement_text'] . "</p>";
                endwhile; 
            endif;
        ?>

        <table style="margin: 0 auto;">
            <tr>
                <th>DAY</th>
                <th>Hours</th>  
            </tr>
            <tr>
                <td>Monday</td>
                <td>5:30am-9:30pm</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>5:30am-9:30pm</td>  
            </tr>
            <tr>
                <td>Wednesday</td>
                <td>5:30am-9:30pm</td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td>5:30am-9:30pm</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td>5:30am-5:00pm</td> 
            </tr>
            <tr>
                <td>Saturday</td>
                <td>Closed</td>
            </tr>
            <tr>
                <td>Sunday</td>
                <td>12:00pm-9:30pm</td>
            </tr>
        </table>

         <h2 style="text-align: center;"> Holiday Hours</h2>
        <table style="margin: 0 auto;">
            <tr>
                <th>Date <br> 2025</th>
                <th>Hours</th>  
            </tr>
            <tr>
                <td>January 1</td>
                <td>CLOSED</td>
            </tr>
            <tr>
                <td>January 20</td>
                <td>CLOSED</td>  
            </tr>
            <tr>
                <td>Febuary 17</td>
                <td>CLOSED</td>
            </tr>
            <tr>
                <td>November 26</td>
                <td>CLOSED AT NOON</td>
            </tr>
        </table>
        </div>
        <div style="text-align: right;">
            <form method="POST" action="">
                <input type="submit" name="go_back" value="Go Back" class="go_back">
            </form>
        </div>
        
    </body>
</html>



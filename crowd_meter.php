<?php
    // if they click go back send back to main page
    if (isset($_POST['go_back'])):
        header("Location: mainpagewau.php");
    endif;

    require_once('wconnection.php');

    $query = "SELECT COUNT(*) as total FROM crowd_meter 
             WHERE time_entry >= NOW() - INTERVAL 2 HOUR";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    $active_users = $row['total'];
    $capacity = 40;
    $raw_percent = ($active_users / $capacity) * 100;
    $filled_bubbles = round($raw_percent / 10); 

    mysqli_close($conn)
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Crowd Meter Bubbles</title>
        <style>       
            .bubble-container
            {
                display: flex;
                justify-content: center;
                gap: 10px;
                margin-top: 40px;           
            }
            .bubble 
            {
                width: 50px;
                height: 60px;
                border-radius: 25%;
                border: 2px solid black;
                background-color: lightgray;
            }
            .filled 
            {
                background-color:#4A3F35;
            }
            .go_back 
            {
                position: fixed;
                bottom: 20px;
                right: 20px;
                z-index: 999;
            }
        </style>
        <link rel="stylesheet" href="master.css">
    </head>
    <body>
        <div class="banner">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT243RYpMJZ7i_O8XB1NJMTlB2ZybjjLCrTVg&s" alt="WAU logo" width="100"/>
            <h1>Crowd Meter</h1>
        </div>

        <!--<h2><?php /* echo round($raw_percent, -1);*/ ?>%</h2>-->

        <div class="bubble-container">
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <div class="bubble <?php echo ($i <= $filled_bubbles) ? 'filled' : ''; ?>"></div>
            <?php endfor; ?>
        </div>

        <div style="text-align: right;">
            <form method="POST" action="">
                <p><input type="submit" name="go_back" value="Go Back" class="go_back"></p>
            </form>
        </div>
    </body>
</html>




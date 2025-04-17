<?php
    require_once('wconnection.php');

    $query = "SELECT * FROM schedule";
    $result = mysqli_query($conn, $query);

    if (isset($_POST['go_back'])):
        header("Location: change_announcement.php");
        exit;
    endif;

    if (isset($_POST['delete'])) 
    {
        $schedule_id = $_POST['schedule_id'];
        $query_delete = "DELETE FROM schedule WHERE schedule_id = $schedule_id";

        if (mysqli_query($conn, $query_delete)) 
        {
            echo " Row deleted successfully!";
        } 
        else 
        {
            echo "Error: " . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>delete announcement</title>
        <link rel="stylesheet" href="master.css">
    </head>
    <body>
        <div class="banner">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT243RYpMJZ7i_O8XB1NJMTlB2ZybjjLCrTVg&s" alt="WAU logo" width="100"/>
            <h1 > Delete </h1>
        </div>
        <div  class="container" > 
            <table >
                <tr>
                    <th>ID</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Announcement</th>
                    <th>Action</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['schedule_id']; ?></td>
                        <td><?php echo $row['start_date']; ?></td>
                        <td><?php echo $row['end_date']; ?></td>
                        <td><?php echo $row['announcement_text']; ?></td>
                        <td>
                            <form method="POST" action="" onsubmit="return confirm('Are you sure?');">
                                <input type="hidden" name="schedule_id" value="<?php echo $row['schedule_id']; ?>">
                                <input type="submit" name="delete" value="Delete">
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>

        </div>  

        <form method="POST" action="">
            <p><input type="submit" name="go_back" value="Go Back" class="go_back"></p>
        </form>

    </body>
</html>
<?php
    require_once('wconnection.php');

    if (isset($_POST['go_back'])) 
    {
        header("Location: change_announcement.php");
        exit;
    }

    if (isset($_POST['update'])) 
    {
        $id = $_POST['schedule_id'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $announcement = $_POST['announcement_text'];

        $update_query = "UPDATE schedule 
                     SET start_date = '$start_date', end_date = '$end_date', announcement_text = '$announcement'
                     WHERE schedule_id = $id";
        mysqli_query($conn, $update_query);
    }

    $edit_row = null;

    if (isset($_POST['edit'])) 
    {
        $edit_id = $_POST['schedule_id'];
        $get_query = "SELECT * FROM schedule WHERE schedule_id = $edit_id";
        $result = mysqli_query($conn, $get_query);
        $edit_row = mysqli_fetch_assoc($result);
    }

    $query = "SELECT * FROM schedule";
    $result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
    <head>  
        <title>Edit Schedule</title>
        <link rel="stylesheet" href="master.css">
    </head>
    <body>
        <div class="banner">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT243RYpMJZ7i_O8XB1NJMTlB2ZybjjLCrTVg&s" alt="WAU logo" width="100"/>
            <h1 > Edit Schedule</h1>
        </div>

        <div  class="container" >
            <?php if ($edit_row): ?>
                <h3>Editing Schedule ID: <?php echo $edit_row['schedule_id']; ?></h3>
                <form method="POST" action="">
                    <input type="hidden" name="schedule_id" value="<?php echo $edit_row['schedule_id']; ?>">
                        Start Date: <input type="date" name="start_date" value="<?php echo $edit_row['start_date']; ?>"><br><br>
                        End Date: <input type="date" name="end_date" value="<?php echo $edit_row['end_date']; ?>"><br><br>
                        Announcement:<br>
                        <textarea name="announcement_text" rows="4" cols="50"><?php echo $edit_row['announcement_text']; ?></textarea><br><br>
                    <input type="submit" name="update" value="Save Changes">
                </form>
                <hr>
            <?php endif; ?>

            <table>
                <tr>
                    <th>ID</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Announcement</th>
                    <th>Edit</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['schedule_id']; ?></td>
                        <td><?php echo $row['start_date']; ?></td>
                        <td><?php echo $row['end_date']; ?></td>
                        <td><?php echo $row['announcement_text']; ?></td>
                        <td>
                            <form method="POST" action="">
                                <input type="hidden" name="schedule_id" value="<?php echo $row['schedule_id']; ?>">
                                <input type="submit" name="edit" value="Edit">
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
        
        <br>

        <form method="POST" action="">
            <input type="submit" name="go_back" value="Go Back" class="go_back">
        </form>

    </body>
</html>


<?php
  if (isset($_POST['go_back'])):
    header("Location: coach_main_page.php");
    exit;
  endif;
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>
    <div class="banner">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT243RYpMJZ7i_O8XB1NJMTlB2ZybjjLCrTVg&s" alt="WAU logo" width="100"/>
      <h1>Announcements</h1>
    </div>

    <div class="container">
      <a href="add_announcement.php" title="add_announcement" class="btn-link">Add Anouncement</a><br/>
      <a href="delete_announcement.php" title="delete_announcement" class="btn-link">Delete Announcement</a><br/>
      <a href="edit_announcement.php" title="edit_announcement" class="btn-link">Edit Announcement</a><br/>      
    </div>

    <div style="text-align: right;">
      <form method="POST" action="">
        <p>  <input type="submit" name="go_back" value="Go Back" class="go_back"></p>
      </form>   
    </div>
    
  </body>
</html>

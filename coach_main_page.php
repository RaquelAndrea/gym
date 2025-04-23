<?php
  if (isset($_POST['go_back'])):
    header("Location: mainpagewau.php");
  endif;
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>
    <div class="banner">    
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT243RYpMJZ7i_O8XB1NJMTlB2ZybjjLCrTVg&s" alt="WAU logo" />
          <h1>Administration Page</h1>
      </div>
    
    <div class="container">
      <a href="main_sign_up.php" title="Signup" class="btn-link">Sign Up</a><br/>
      <a href="coach_faq_withcss.php" title="Faq" class="btn-link">FAQ Page</a><br/>
      <a href="coach_feedback.php" title="Feedback" class="btn-link" >Feedback</a><br/>
      <a href="change_announcement.php" title="Suggestions" class="btn-link" >Schedule Announcement</a>
      
      <form method="POST" action="">
        <input type="submit" name="go_back" value="Logout" >
      </form>
    </div>
    
  </body>
</html>

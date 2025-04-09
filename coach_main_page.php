<?php
if (isset($_POST['go_back'])):
  header("Location: mainpagewau.php");
endif;

?>
<!DOCTYPE html>
<html>
<head>
  <style>
    html {
      color-scheme: dark;
    }
  </style>
</head>
<body>

  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT243RYpMJZ7i_O8XB1NJMTlB2ZybjjLCrTVg&s" alt="WAU logo" width="100"/>
  <h1>Administration Page</h1>
  <hr/>

  <table>
    <tr valign="center">
      <td>
        <ul>
          <li><a href="main_sign_up.php" title="Signup">Sign Up</a></li>
          <li><a href="faq_page.php" title="Faq">FAQ Page</a></li>
          <li><a href="feedback.php" title="Feedback">Feedback</a></li>
          <li><a href="change_announcement.php" title="Suggestions">Schedule Announcement</a></li>
          <li>
            <form method="POST" action="">
            <input type="submit" name="go_back" value="Logout">
            </form></li>
        </ul>
      </td>
    </tr>
  </table>
</body>
</html>

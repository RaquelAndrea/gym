<?php
$message = "";
if (isset($_POST['submit'])) {
    require_once('wconnection.php');

    function generateFeedbackId($conn) {
        do {
            $id = rand(10000000, 99999999);
            $check = mysqli_query($conn, "SELECT feedback_id FROM feedback WHERE feedback_id = '$id'");
        } while (mysqli_num_rows($check) > 0);
        return $id;
    }

    $feedback_id = generateFeedbackId($conn);
    $feedback_date = date('Y-m-d');
    $feedback_text = $_POST['feedback_text'];
    
    // You must decide what to do with user_id
    // For now, we can hardcode it (example: 87959403)
    $user_id = 87959403;  // Hardcoded or fetch later from login/session

    if (!empty($feedback_text)) {
        $query = "INSERT INTO feedback (feedback_id, feedback_text, feedback_date, user_id) 
                  VALUES ('$feedback_id', '$feedback_text', '$feedback_date', '$user_id')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            $message = "Congratulations, your feedback was submitted!";
        } else {
            $message = "Error: " . mysqli_error($conn);
        }
    } else {
        $message = "Please enter feedback before submitting.";
    }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Feedback</title>
    <style>
    * {
      color: #D9B382;
    }
    h1 {
      text-align: center;
    }
    body {
      margin: 0;
      background-color: #f4f6f9;   
    }
    .banner {
      background-color: #1A3431;
      position: relative;
      height: 70px;
    }
    .banner img {
      position: absolute;
      top: 10px;
      left: 10px;
      height: 50px;
      width: auto;
    }
    .banner h1 {
      color: #D9B382;
      line-height: 70px; 
      margin: 0;
      text-align: center;
    }
    .go_back {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 999;
    }
    .container {
      border: 0.2% solid #1A3431;
      padding: 5%;
      width: 90%;
      max-width: 500px;
      margin: 5% auto;
      text-align: center;
      border-radius: 1%;
      background-color:  #ffffff;
      font-size: 100%; 
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 12px 15px;
      text-align: left;
    }
    th {
      background-color: #007bff;
      color: white;
    }
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    tr:hover {
      background-color: #eef1f4;
    }
    .btn-link {
      color: black;
      border: 2px solid black;
      background-color: transparent;
      padding: 10px 22px;
      border-radius: 6px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s ease;
      display: inline-block;
      text-decoration: none;
      margin: 8px 0;
    }
    textarea {
      width: 100%;
      height: 150px;
      padding: 10px;
      font-size: 14px;
    }
    </style>
</head>
<body>
    <div class="banner">
        <h1>User Feedback</h1>
    </div>

    <div class="container">
        <h2>Feedback</h2>
        <p><?php echo $message; ?></p>
        <form method="POST" action="">
            <textarea name="feedback_text" placeholder="Enter Feedback"></textarea><br><br>
            <button type="submit" name="submit" class="btn-link">Submit</button>
        </form>
    </div>
</body>
</html>






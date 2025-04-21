<?php

$conn = new mysqli("localhost", "root", "", "gym");


$result = $conn->query("SELECT question, answer FROM FAQ");
?>

<!DOCTYPE html>
<html>
<head>
  <title>WAU Gym - FAQ</title>
  <style>
    
    .faq-item {
      background-color: #ffffff;
      color: black;
      border: 1px solid #1A3431;
      border-radius: 8px;
      padding: 20px;
      margin: 25px auto;
      max-width: 700px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .question {
      font-weight: bold;
      margin-bottom: 10px;
      font-size: 18px;
    }

    .answer {
      font-size: 16px;
    }
    
    
         
   
  </style>
  <link rel="stylesheet" href="master.css">
</head>
<body>
<div class="banner">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT243RYpMJZ7i_O8XB1NJMTlB2ZybjjLCrTVg&s" alt="WAU logo" width="100"/>
            <h1>WAU Gym - Frequently Asked Questions</h1> 
        </div>



<?php while ($row = $result->fetch_assoc()): ?>
  <div class="faq-item">
    <div class="question">Q: <?= $row['question'] ?></div>
    <div class="answer">A: <?= $row['answer'] ?></div>
  </div>
<?php endwhile; ?>

</body>
</html>

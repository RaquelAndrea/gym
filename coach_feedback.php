<?php
require_once('wconnection.php');

$message = "";

// Handle deletion
if (isset($_GET['delete'])) {
    $delete_id = intval($_GET['delete']);
    $delete_query = "DELETE FROM feedback WHERE feedback_id = $delete_id";
    if (mysqli_query($conn, $delete_query)) {
        $message = "Feedback deleted successfully.";
    } else {
        $message = "Error deleting feedback: " . mysqli_error($conn);
    }
}

// Fetch feedback
$feedbacks = mysqli_query($conn, "SELECT * FROM feedback ORDER BY feedback_date DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Coach Feedback</title>
    
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
</style>

</head>
<body>

<div class="banner">
    

  <h1>Coach Feedback</h1>
</div>

<div class="container">
    <h1>Coach Feedback</h1>

    <?php if (!empty($message)): ?>
        <p><b><?php echo $message; ?></b></p>
    <?php endif; ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Feedback</th>
            <th>Date</th>
            <th>Action</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($feedbacks)): ?>
            <tr>
                <td><?php echo $row['feedback_id']; ?></td>
                <td><?php echo htmlspecialchars($row['feedback_text']); ?></td>
                <td><?php echo $row['feedback_date']; ?></td>
                <td>
                    <a href="?delete=<?php echo $row['feedback_id']; ?>" onclick="return confirm('Are you sure you want to delete this feedback?');">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>

</body>
</html>









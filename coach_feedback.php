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
        body {
            font-family: Arial, sans-serif;
            background: #f4f7f9;
            margin: 0;
            padding: 0;
        }

        .banner {
            background-color: #001f3f;
            padding: 20px;
            text-align: center;
        }

        .banner img {
            max-height: 100px;
        }

        .container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            margin: 40px auto;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        p {
            text-align: center;
            font-weight: bold;
            color: #006400;
            margin-bottom: 20px;
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

        a {
            color: #d9534f;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="banner">
    <img src="uploads/waulogo.png" alt="WAU Logo">
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







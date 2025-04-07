<?php
// Connect to your database
$conn = new mysqli("localhost", "root", "", "gym"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['user_id'];

    
    $check = $conn->query("SELECT * FROM gym_user WHERE user_id = '$id'");
    
    if ($check->num_rows > 0) {
        $conn->query("DELETE FROM crowd_meter WHERE user_id = '$id'");

        $delete = $conn->query("DELETE FROM gym_user WHERE user_id = '$id'");
        if ($delete) {
            $msg = "User with ID $id deleted successfully.";
        } else {
            $msg = " Error deleting user: " . $conn->error;
        }
    } else {
        $msg = " No user found with ID $id.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        html{ color-scheme: dark;
        }
      *{text-align: center;}

    </style>
    <title>Delete User</title>
</head>
<body>

<h1>Delete User</h1>

<form method="post">
    <label>Select User ID:</label>
    <select name="user_id" required>
        <option value="">-- Select ID --</option>
        <?php
     
        $result = $conn->query("SELECT user_id FROM gym_user");
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . htmlspecialchars($row['user_id']) . '">' . htmlspecialchars($row['user_id']) . '</option>';
        }
        ?>
    </select>
    <br><br>
    <button type="submit">Delete</button>
</form>

<?php if (isset($msg)): ?>
    <p style="margin-top: 20px;"><?= $msg ?></p>
<?php endif; ?>


</body>
</html>


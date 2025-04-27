<?php

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
            $msg = "Error deleting user: " . $conn->error;
        }
    } else {
        $msg = "No user found with ID $id.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>
    <style>
        * {
            color: #D9B382;
            font-family: Arial, sans-serif;
            box-sizing: border-box;
        }
        body {
            margin: 0;
            background-color: #f4f6f9;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 60px;
        }
        .banner {
            background-color: #1A3431;
            height: 70px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
        }
        .banner h1 {
            color: #D9B382;
            margin: 0;
            line-height: 70px;
            text-align: center;
        }
        .container {
            background-color: #ffffff;
            border: 0.2% solid #1A3431;
            border-radius: 8px;
            padding: 30px;
            margin-top: 100px;
            width: 90%;
            max-width: 400px;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        select, button {
            padding: 10px;
            width: 80%;
            font-size: 16px;
            margin-top: 10px;
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
            margin-top: 20px;
        }
        .go_back {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }
        .msg {
            margin-top: 20px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="banner">
    <h1>Delete User</h1>
</div>

<div class="container">
    <form method="post">
        <label>Select User ID:</label><br>
        <select name="user_id" required>
            <option value="">-- Select ID --</option>
            <?php
            $result = $conn->query("SELECT user_id FROM gym_user");
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row['user_id'] . '">' . $row['user_id'] . '</option>';
            }
            ?>
        </select>
        <br>
        <button type="submit" class="btn-link">Delete</button>
    </form>

    <?php if (isset($msg)): ?>
        <p class="msg"><?= $msg ?></p>
    <?php endif; ?>
</div>

<div class="go_back">
    <a href="main_sign_up.php"><button class="btn-link">Go Back</button></a>
</div>

</body>
</html>


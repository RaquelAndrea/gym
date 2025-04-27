<?php
$conn = new mysqli("localhost", "root", "", "gym"); 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
    $id = $_POST['user_id'];
    $result = $conn->query("SELECT * FROM gym_user WHERE user_id = '$id'");
    $user = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['user_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone_num'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $dob = $_POST['DOB'];

    $update = "UPDATE gym_user SET 
                fname = '$fname',
                lname = '$lname',
                phone_num = '$phone',
                email = '$email',
                address = '$address',
                DOB = '$dob'
              WHERE user_id = '$id'";

    if ($conn->query($update)) {
        $msg = "User information updated successfully!";
    } else {
        $msg = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
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
            max-width: 450px;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        select, input, button {
            padding: 10px;
            width: 90%;
            font-size: 16px;
            margin: 10px 0;
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
        }
        .go_back {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }
        .msg {
            margin-top: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

<div class="banner">
    <h1>Edit User Info</h1>
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
        <button type="submit" name="search" class="btn-link">Search</button>
    </form>

    <?php if (isset($user) && $user): ?>
    <form method="post">
        <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>" />
        <p>First Name: <input type="text" name="fname" value="<?= $user['fname'] ?>"></p>
        <p>Last Name: <input type="text" name="lname" value="<?= $user['lname'] ?>"></p>
        <p>Phone Number: <input type="text" name="phone_num" value="<?= $user['phone_num'] ?>"></p>
        <p>Email: <input type="email" name="email" value="<?= $user['email'] ?>"></p>
        <p>Address: <input type="text" name="address" value="<?= $user['address'] ?>"></p>
        <p>Date of Birth: <input type="date" name="DOB" value="<?= $user['DOB'] ?>"></p>
        <button type="submit" name="update" class="btn-link">Update</button>
    </form>
    <?php endif; ?>

    <?php if (isset($msg)): ?>
        <p class="msg"><?= $msg ?></p>
    <?php endif; ?>
</div>

<div class="go_back">
    <a href="main_sign_up.php"><button class="btn-link">Go Back</button></a>
</div>

</body>
</html>



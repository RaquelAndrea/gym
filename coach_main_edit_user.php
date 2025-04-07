<?php

// Connect to your database
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
        echo " User information updated successfully!";
    } else {
        echo " Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h1>Edit User Info</h1>
<form method="post">
    <label>Select User ID:</label>
    <select name="user_id" required>
        <option value="">-- Select ID --</option>
        <?php
        // Fetch all user IDs
        $result = $conn->query("SELECT user_id FROM gym_user");
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . htmlspecialchars($row['user_id']) . '">' . htmlspecialchars($row['user_id']) . '</option>';
        }
        ?>
    </select>
    <button type="submit" name="search">Search</button>
</form>


<?php if (isset($user) && $user): ?>
  <form method="post">
  <input type="hidden" name="user_id" value="<?= htmlspecialchars($user['user_id']) ?>" />

      <p>First Name: <input type="text" name="fname" value="<?= htmlspecialchars($user['fname']) ?>"></p>
      <p>Last Name: <input type="text" name="lname" value="<?= htmlspecialchars($user['lname']) ?>"></p>
      <p>Phone Number: <input type="text" name="phone_num" value="<?= htmlspecialchars($user['phone_num']) ?>"></p>
      <p>Email: <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>"></p>
      <p>Address: <input type="text" name="address" value="<?= htmlspecialchars($user['address']) ?>"></p>
      <p>Date of Birth: <input type="date" name="DOB" value="<?= htmlspecialchars($user['DOB']) ?>"></p>

      <button type="submit" name="update">Update</button>
  </form>
<?php endif; ?>

</body>
</html>


<?php
if (isset($_POST['submit'])):

    require_once('wconnection.php');

    // Function to generate a unique user_id
    function generateUniqueUserId($conn) {
        do {
            $user_id = rand(10000000, 99999999);
            $check_query = "SELECT user_id FROM gym_user WHERE user_id = '$user_id'";
            $result = mysqli_query($conn, $check_query);
        } while (mysqli_num_rows($result) > 0);

        return $user_id;
    }

    // Generate unique ID and get form data
    $user_id = generateUniqueUserId($conn);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $DOB = $_POST['DOB'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone_num = $_POST['phone_num'];

    // Insert into database
    $my_query = "INSERT INTO gym_user (user_id, fname, lname, DOB, email, address, phone_num) 
                 VALUES ('$user_id','$fname', '$lname', '$DOB', '$email', '$address', '$phone_num')";

    $result = mysqli_query($conn, $my_query);

    if (!$result) {
        echo "Error: " . mysqli_error($conn);
    } else {
        echo "<b>New user successfully added! User ID: $user_id</b>";
    }

    mysqli_close($conn);
endif;
?>

<html>
<head>
    <title>Register New User</title>
</head>
<body>
    <h2>Register a New Gym User</h2>
    <form action="" method="post">
        <p>First Name: <input type="text" name="fname" id="fname" size="25" required /></p>
        <p>Last Name: <input type="text" name="lname" id="lname" size="25" required /></p>
        <p>Date of Birth: <input type="date" name="DOB" id="DOB" size="25" required /></p>
        <p>Email: <input type="email" name="email" id="email" size="25" required /></p>
        <p>Address: <input type="text" name="address" id="address" size="25" required /></p>
        <p>Phone Number: <input type="text" name="phone_num" id="phone_num" size="25" placeholder="xxx-xxx-xxxx" required /></p>
        <p><input type="submit" name="submit" value="Submit" /></p>
    </form>
</body>
</html>


<?php
if (isset($_POST['submit'])):

    require_once('wconnection.php');

    function generateUniqueUserId($conn) {
        do {
            $user_id = rand(10000000, 99999999);
            $check_query = "SELECT user_id FROM gym_user WHERE user_id = '$user_id'";
            $result = mysqli_query($conn, $check_query);
        } while (mysqli_num_rows($result) > 0);

        return $user_id;
    }

    $user_id = generateUniqueUserId($conn);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $DOB = $_POST['DOB'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone_num = $_POST['phone_num'];

    $my_query = "INSERT INTO gym_user (user_id, fname, lname, DOB, email, address, phone_num) 
                 VALUES ('$user_id','$fname', '$lname', '$DOB', '$email', '$address', '$phone_num')";

    $result = mysqli_query($conn, $my_query);

    if (!$result) {
        echo "<div class='message error'>Error: " . mysqli_error($conn) . "</div>";
    } else {
        echo "<div class='message success'><b>New user successfully added! User ID: $user_id</b></div>";
    }

    mysqli_close($conn);
endif;
?>

<html>
<head>
    <title>Register New User</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            margin: 0;
            padding: 40px;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }

        form {
            background: #ffffff;
            max-width: 500px;
            margin: 0 auto;
            padding: 30 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        p {
            margin-bottom: 18px;
            font-size: 15px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #34495e;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"] {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 15px;
            transition: border 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="date"]:focus {
            border-color: #3498db;
            outline: none;
        }

        input[type="submit"] {
            background: #3498db;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background: #2980b9;
        }

        .message {
            max-width: 500px;
            margin: 20px auto;
            padding: 15px;
            text-align: center;
            border-radius: 8px;
            font-weight: 500;
        }

        .message.success {
            background-color: #eafaf1;
            color: #2e7d32;
            border: 1px solid #a5d6a7;
        }

        .message.error {
            background-color: #fcebea;
            color: #c0392b;
            border: 1px solid #e0b4b4;
        }
    </style>
</head>
<body>
    <h2>Register a New Gym User</h2>
    <form action="" method="post">
        <p>
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" required />
        </p>
        <p>
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname" required />
        </p>
        <p>
            <label for="DOB">Date of Birth:</label>
            <input type="date" name="DOB" id="DOB" required />
        </p>
        <p>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required />
        </p>
        <p>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" required />
        </p>
        <p>
            <label for="phone_num">Phone Number:</label>
            <input type="text" name="phone_num" id="phone_num" placeholder="xxx-xxx-xxxx" required />
        </p>
        <p>
            <input type="submit" name="submit" value="Submit" />
        </p>
    </form>
</body>
</html>



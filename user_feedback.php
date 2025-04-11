<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once('wconnection.php');

    $feedback_text = trim($_POST['feedback']);

    if (!empty($feedback_text)) {

        function generateFeedbackId($conn) {
            do {
                $id = rand(1000, 9999);
                $check = mysqli_query($conn, "SELECT feedback_id FROM feedback WHERE feedback_id = $id");
            } while (mysqli_num_rows($check) > 0);
            return $id;
        }

        $feedback_id = generateFeedbackId($conn);
        $feedback_date = date('Y-m-d');

        $query = "INSERT INTO feedback (feedback_id, feedback_text, feedback_date) 
                  VALUES ($feedback_id, '$feedback_text', '$feedback_date')";

        $result = mysqli_query($conn, $query);

        if ($result) {
            $message = "Congratulations, your feedback was submitted!";
        } else {
            $message = "Error: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        $message = "Please enter feedback before submitting.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7f9;
            padding: 40px;
            display: flex;
            justify-content: center;
            position: relative;
        }

        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 80px;
            height: auto;
            border-radius: 8px;
        }

        form {
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            max-width: 600px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }

        textarea {
            width: 100%;
            padding: 10px;
            resize: vertical;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            margin-bottom: 20px;
        }

        button {
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #0056b3;
        }

        p {
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
            color: #333;
        }
    </style>
</head>
<body>

    <!-- WAU logo using your uploaded image -->
    <img src="wau-banner.png" alt="WAU Logo" class="logo">

    <form method="post" action="">
        <h1>Feedback</h1>
        <label for="feedback">Feedback</label><br><br>
        <textarea id="feedback" name="feedback" rows="6" cols="50" placeholder="Enter Feedback" required></textarea><br><br>
        <button type="submit">Submit</button>
        <p><b><?php echo $message; ?></b></p>
    </form>

</body>
</html>






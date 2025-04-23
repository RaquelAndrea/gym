<?php
$conn = new mysqli("localhost", "root", "", "gym");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) {
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $insert = "INSERT INTO FAQ (question, answer) VALUES ('$question', '$answer')";
    $conn->query($insert);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $selected_question = $_POST['delete_question'];
    $delete = "DELETE FROM FAQ WHERE question = '$selected_question'";
    $conn->query($delete);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
    $selected_question = $_POST['modify_question'];
    $result = $conn->query("SELECT * FROM FAQ WHERE question = '$selected_question'");
    $faq = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $original_question = $_POST['original_question'];
    $new_question = $_POST['question'];
    $answer = $_POST['answer'];
    $update = "UPDATE FAQ SET question = '$new_question', answer = '$answer' WHERE question = '$original_question'";
    $conn->query($update);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>FAQ Management</title>
    <style>
        * {
            font-family: Arial, sans-serif;
            box-sizing: border-box;
            color: #D9B382;
        }
        body {
            margin: 0;
            background-color: #f4f6f9;
            padding-top: 80px;
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
            background-color: white;
            padding: 30px;
            max-width: 600px;
            margin: auto;
            border: 1px solid #1A3431;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        form {
            margin-bottom: 30px;
        }
        h2, h3 {
            color: #1A3431;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            font-size: 16px;
        }
        button {
            padding: 10px 22px;
            font-size: 16px;
            font-weight: bold;
            background-color: transparent;
            border: 2px solid #1A3431;
            color: #1A3431;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #f0f0f0;
        }
        .go_back {
            position: fixed;
            bottom: 20px;
            right: 20px;
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
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="banner">
    <h1>WAU Gym - FAQ Management</h1>
</div>

<div class="container">
    <h2>Wau Athletics - FAQ Management</h2>

    <h3>Add FAQ Item</h3>
    <form method="post">
        <p>Question: <input type="text" name="question" required></p>
        <p>Answer: <input type="text" name="answer" required></p>
        <button type="submit" name="add">Add</button>
    </form>

    <h3>Delete FAQ Item</h3>
    <form method="post">
        <label>Select Question to Delete:</label>
        <select name="delete_question" required>
            <option value="">-- Select Question --</option>
            <?php
            $result = $conn->query("SELECT question FROM FAQ");
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row['question'] . '">' . $row['question'] . '</option>';
            }
            ?>
        </select>
        <button type="submit" name="delete">Delete</button>
    </form>

    <h3>Modify FAQ Item</h3>
    <form method="post">
        <label>Select Question to Modify:</label>
        <select name="modify_question" required>
            <option value="">-- Select Question --</option>
            <?php
            $result = $conn->query("SELECT question FROM FAQ");
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row['question'] . '">' . $row['question'] . '</option>';
            }
            ?>
        </select>
        <button type="submit" name="search">Edit</button>
    </form>

    <?php if (isset($faq) && $faq): ?>
    <form method="post">
        <input type="hidden" name="original_question" value="<?= $faq['question'] ?>" />
        <p>Question: <input type="text" name="question" value="<?= $faq['question'] ?>"></p>
        <p>Answer: <input type="text" name="answer" value="<?= $faq['answer'] ?>"></p>
        <button type="submit" name="update">Update</button>
    </form>
    <?php endif; ?>
</div>

<div class="go_back">
    <a href="coach_main_page.php" class="btn-link">Go Back</a>
</div>

</body>
</html>



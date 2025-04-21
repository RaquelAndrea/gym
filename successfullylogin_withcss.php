<!DOCTYPE html>
<html>
<head>
    <title>LOGIN SUCCESSFUL</title>
    <style>
        * {
            font-family: Arial, sans-serif;
            color: #D9B382;
            box-sizing: border-box;
        }
        body {
            margin: 0;
            background-color: #f4f6f9;
            display: flex;
            flex-direction: column;
            align-items: center;
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
            border: 0.2% solid #1A3431;
            border-radius: 8px;
            padding: 40px;
            margin-top: 100px;
            width: 90%;
            max-width: 500px;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
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
            margin-top: 20px;
        }
    </style>
</head>

<body>

<div class="banner">
    <h1>WAU Athletics</h1>
</div>

<div class="container">
    <h2>You have successfully signed in!</h2>
    <a href="mainpagewau.php"><button class="btn-link">Go to Main</button></a>
</div>

</body>
</html>

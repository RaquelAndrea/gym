<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Invalid ID</title>
  <style>
    * {
      color: #D9B382;
    }

    h1 {
      text-align: center;
    }

    body {
      margin: 0;
      background-color: #f4f6f9;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      height: 100vh;
    }

    .banner {
      background-color: #1A3431;
      position: relative;
      height: 70px;
      width: 100%;
    }

    .banner img {
      position: absolute;
      top: 10px;
      left: 10px;
      height: 50px;
      width: auto;
    }

    .banner h1 {
      color: #D9B382;
      line-height: 70px;
      margin: 0;
      text-align: center;
    }

    .container {
      text-align: center;
      background-color: #ffffff;
      padding: 40px;
      border: 1px solid #1A3431;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      margin-top: 30px;
    }

    .container p {
      font-size: 20px;
      color: red;
      margin-bottom: 20px;
    }

    button {
      padding: 12px 25px;
      font-size: 16px;
      border: 2px solid black;
      background-color: transparent;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s ease;
    }

    button:hover {
      background-color: #1A3431;
      color: white;
    }
  </style>
</head>

<body>

  <div class="banner">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT243RYpMJZ7i_O8XB1NJMTlB2ZybjjLCrTVg&s" alt="WAU Logo">
    <h1>Wau Athletics</h1>
  </div>

  <div class="container">
    <p>Invalid ID#</p>
    <a href="mainpagewau.php">
      <button>Go Back</button>
    </a>
  </div>

</body>
</html>

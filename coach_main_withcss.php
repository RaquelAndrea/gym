<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
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
    }

    .banner {
      background-color: #1A3431;
      position: relative;
      height: 70px;
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

    .go_back {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 999;
    }

    .container {
      border: 0.2% solid #1A3431;
      padding: 5%;
      width: 90%;
      max-width: 500px;
      margin: 5% auto;
      text-align: center;
      border-radius: 1%;
      background-color: #ffffff;
      font-size: 100%;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 12px 15px;
      text-align: left;
    }

    th {
      background-color: #007bff;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #eef1f4;
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
      transition: all 0.3s ease;
      display: inline-block;
      text-decoration: none;
      margin: 8px 0;
    }
  </style>
</head>
<body>

  <div class="banner">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT243RYpMJZ7i_O8XB1NJMTlB2ZybjjLCrTVg&s" alt="WAU Logo">
    <h1>Administration Dashboard</h1>
  </div>


  <div class="container">
    <h2>Welcome Coach</h2>
    <table>
      <tr>
        <th>Action</th>
        <th>Link</th>
      </tr>
      <tr>
        <td>Sign Up New User</td>
        <td><a href="main_sign_up.php" class="btn-link">Sign Up</a></td>
      </tr>
      <tr>
        <td>View/Edit/Delete FAQ Page</td>
        <td><a href="coach_faq_withcss.php" class="btn-link">FAQ Page</a></td>
      </tr>
      <tr>
        <td>Feedback</td>
        <td><a href="suggestion.php" class="btn-link">Feedback</a></td>
      </tr>
      <tr>
        <td>Logout</td>
        <td><a href="coach_logout.php" class="btn-link">Logout</a></td>
      </tr>
    </table>
  </div>

  
 
</body>
</html>

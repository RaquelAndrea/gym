<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Washington Adventist University Athletics</title>
  
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
  background-color:  #ffffff;
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

   <link rel="stylesheet" href="master.css">
</head>
<body>
<div class="banner">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT243RYpMJZ7i_O8XB1NJMTlB2ZybjjLCrTVg&s" alt="WAU logo" width="100"/>
            
 
  <h1>Main Sign Up</h1>
</div>
 
  <div class="container">

    <h2>Washington Adventist University<br>Athletics</h2>
    <div class="actions">
      <a href="gym_sign_up.php" class="btn-link" title="Add">Add User</a><br>
      <a href="coach_main_delete_user.php" class="btn-link" title="Delete">Delete User</a><br>
      <a href="coach_main_edit_user.php" class="btn-link" title="Edit">Edit User</a>
    </div>
</div>
</body>
</html>
 

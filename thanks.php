<?php
// Connect to the database

$servername = "localhost";
$username = "id20071036_lazare";
$password = "wncodf51KT~[ilmo";
$dbname = "id20071036_babyfoot";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Retrieve the form data
$date = date("Y-m-d H:i:s");
$team_a_player_a = mysqli_real_escape_string($conn, $_POST['team_a_player_a']);
$team_a_player_b = mysqli_real_escape_string($conn, $_POST['team_a_player_b']);
$team_b_player_a = mysqli_real_escape_string($conn, $_POST['team_b_player_a']);
$team_b_player_b = mysqli_real_escape_string($conn, $_POST['team_b_player_b']);
$score_a = intval($_POST['score_a']);
$score_b = intval($_POST['score_b']);

?>

<!DOCTYPE html>
<html>
<head>
  <style>
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .message {
    margin-bottom: 20px;
margin-top: 00px;
  color: #333; /* added color to heading */
  font-size: 35px;
  align-self: center;
  font-style: normal;
  text-align: center;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen","Ubuntu", "Cantarell", "Fira Sans","Droid Sans", "Helvetica Neue", sans-serif;
  font-weight: 700;
    }

    .button {
      background-color: #4cc366;
      border: none;
      color: white;
      padding: 20px 42px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 45px;
      cursor: pointer;
      border-radius: 8px;
    }

    .button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="message">
<h2>Thank you for submitting the results!</h2>
    </div>
    <form action="index.html">
      <button class="button">Go back</button>
    </form>
  </div>
</body>
</html>

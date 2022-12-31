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

// Retrieve the most recent result from the database
$query = "SELECT * FROM babyfoot_results ORDER BY date DESC LIMIT 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Extract the data from the result row
$date = $row['date'];
$team_a_player_a = $row['team_a_player_a'];
$team_a_player_b = $row['team_a_player_b'];
$team_b_player_a = $row['team_b_player_a'];
$team_b_player_b = $row['team_b_player_b'];
$score_a = $row['score_a'];
$score_b = $row['score_b'];

// Close the database connection
mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>

    <!-- Hiding the webhost tag --> 
    <style> img[alt="www.000webhost.com"]{display:none;} </style>
    <head>
  <style>

body {
  overflow-x: hidden; /* prevents horizontal scrolling */
  max-width: 1200px; /* sets a maximum width for the page */
  margin: 0 auto; /* centers the page horizontally */
}
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;

    }

    .message {
    margin-bottom: 20px;
margin-top: 00px;
  color: #333; /* added color to heading */
  font-size: 35px;
  /* align-self: center;*/
  font-style: normal;
  text-align: center;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen","Ubuntu", "Cantarell", "Fira Sans","Droid Sans", "Helvetica Neue", sans-serif;
  font-weight: 700;
    }

  .button {
  margin: 0 auto; /* centers the page horizontally */
  color: #ffffff;
  width: 80%;
  height: 128px;
  font-size: 50px;
  margin: 15px;
  margin-top : 30.45vh;
  text-align: center;
  border-color: #ffffff;
  background-color: #116AFF;
  border-radius: 20px;
  font-weight: bold; /* makes the text bolder */
}

    .button:hover {
      background-color: #116AFF;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="message">
<h2>Thank you for submitting the results!</h2>


<!-- Display the result --> 
<h3>Your upload: </h3>
<div class="result" style="text-align: left;">
  <table style="width: 80%; margin: 0 auto; border-collapse: separate; border-spacing: 0;border: 1px solid black;">
    <tr>
      <th style="border: 1px solid black; font-size: 35px; font-weight: Medium;text-align: center; padding: 10px 20px;">Players</th>
      <th style="border: 1px solid black; font-size: 35px; font-weight: Medium;text-align: center;padding: 10px 20px;">Score</th>
    </tr>
    <tr>
      <td style="border: 1px solid black; font-weight: normal; color: system-ui; padding: 10px 20px;"><?php echo $team_a_player_a; ?> and <?php echo $team_a_player_b; ?></td>
      <td style="border: 1px solid black; font-weight: normal; color: system-ui; adding: 10px 20px; text-align: center;"><?php echo $score_a; ?></td>
    </tr>
    <tr>
      <td style="border: 1px solid black; font-weight: normal; color: system-ui; padding: 10px 20px;"><?php echo $team_b_player_a; ?> and <?php echo $team_b_player_b; ?></td>
      <td style="border: 1px solid black; font-weight: normal; color: system-ui; padding: 10px 20px; text-align: center;"><?php echo $score_b; ?></td>
    </tr>
  </table>

</div>

<!-- Add introduction sentence -->
<p style="font-weight: lighter; font-size: smaller; color: #666;">Wrong upload ?</br>You can cancel it and do a new one:</br>

<!-- Add cancel button -->
<button class="cancel-button" onclick="deleteLastMatch()">Cancel</button>

<style>
  .cancel-button {
    background-color: #F25E6B;
    border: none;
    color: #ffffff;
    padding: 15px 35px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 25px;
    margin: 2px 2px;
    margin-top: 20px;
    cursor: pointer;
    border-radius: 7px;
  }
</style>

<script>
  function deleteLastMatch() {
    if (confirm('Are you sure you want to cancel the last match?')) {
      // Send an HTTP request to the PHP script to delete the last match
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // Display a message indicating that the match was deleted successfully
          alert(this.responseText);
        }
      };
      xhttp.open("GET", "delete-last-match.php", true);
      xhttp.send();
    }
  }
</script>

<br>
  <br>
 <br>
 <br>
 <br>
<form action="index.html">
  <button class="button">Go back</button>
</form>

</html>
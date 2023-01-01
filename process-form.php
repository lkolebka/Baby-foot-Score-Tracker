<?php

header('Location: http://baby-foot-brussels.fun/thanks.php');


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
echo "Connected successfully";

// Retrieve the form data
$date = date("Y-m-d H:i:s");
$team_a_player_a = mysqli_real_escape_string($conn, $_POST['team_a_player_a']);
$team_a_player_b = mysqli_real_escape_string($conn, $_POST['team_a_player_b']);
$team_b_player_a = mysqli_real_escape_string($conn, $_POST['team_b_player_a']);
$team_b_player_b = mysqli_real_escape_string($conn, $_POST['team_b_player_b']);
$score_a = intval($_POST['score_a']);
$score_b = intval($_POST['score_b']);



// Insert the data into the database
$sql = "INSERT INTO babyfoot_results (date, team_a_player_a, team_a_player_b, team_b_player_a, team_b_player_b, score_a, score_b)
VALUES (\"$date\", \"$team_a_player_a\", \"$team_a_player_b\", \"$team_b_player_a\", \"$team_b_player_b\", $score_a, $score_b)";

if (mysqli_query($conn, $sql)) {
    // Form submission was successful, display a success message
    echo "Form submitted successfully. Thank you for your submission.";
  } else {
    // Form submission failed, display an error message
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close the database connection
  mysqli_close($conn);

  
// Redirect to the thanks.html page
header("Location: thanks.php");

exit;

?>


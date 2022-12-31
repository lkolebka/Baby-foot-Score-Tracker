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

// Delete the last line from the database
$query = "DELETE FROM babyfoot_results ORDER BY date DESC LIMIT 1";
        if ($conn->query($query) === TRUE) {
     
          echo "The last match has been successfully deleted.";
        } else {
          echo "Error deleting record: " . $conn->error;
        }

// Close the connection 
$conn->close();
     
?>

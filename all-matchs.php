<!-- results.html -->
<!DOCTYPE html>
<html>
<head>
<style> img[alt="www.000webhost.com"]{display:none;} </style>
<h2 class="result-table-heading">Results table: </h2>
  <style>

    .result-table-heading {
    margin-bottom: px;
    margin-top: 00px;
    color: #333; 
    font-style: normal;
    text-align: center;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen","Ubuntu", "Cantarell", "Fira Sans","Droid Sans", "Helvetica Neue", sans-serif;
    font-weight: 700;
    display: block;
    font-size: 5em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;


    }


    .result-table {
      width: 90%;
      margin: 0 auto;
      border-collapse: separate;
      border-spacing: 0;
      border: 1px solid black;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen","Ubuntu", "Cantarell", "Fira Sans","Droid Sans", "Helvetica Neue", sans-serif;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    .result-table th {
      border: 1px solid black;
      font-size: 35px;
      font-weight: Medium;
      text-align: center;
      padding: 10px 20px;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen","Ubuntu", "Cantarell", "Fira Sans","Droid Sans", "Helvetica Neue", sans-serif;

    }
    .result-table td {
      border: 1px solid black;
      font-size: 25px;
      font-weight: normal;
      color: system-ui;
      padding: 10px 20px;
      text-align: center;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen","Ubuntu", "Cantarell", "Fira Sans","Droid Sans", "Helvetica Neue", sans-serif;

    }
  </style>
</head>
<body>

  <div class="results">
    <table class="result-table">
      <tr>
        <th>Date</th>
        <th>Team A</th>
        <th>Team B</th>
        <th>Score</th>
      </tr>
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

        // Retrieve all the results from the database
        $query = "SELECT * FROM babyfoot_results ORDER BY date DESC";
        $result = mysqli_query($conn, $query);

        // Display the results
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // Extract the data from the result row
                $date = $row['date'];
                $team_a_player_a = $row['team_a_player_a'];
                $team_a_player_b = $row['team_a_player_b'];
                $team_b_player_a = $row['team_b_player_a'];
                $team_b_player_b = $row['team_b_player_b'];
                $score_a = $row['score_a'];
                $score_b = $row['score_b'];

                        // Display the result in a table row
        echo "<tr>";
        echo "<td>$date</td>";
        echo "<td>$team_a_player_a - $team_a_player_b</td>";
        echo "<td>$team_b_player_a - $team_b_player_b</td>";
        echo "<td>$score_a - $score_b</td>";
        echo "</tr>";
        
    }
} else {
    echo "No results found";
}

// Close the database connection
mysqli_close($conn);
?>


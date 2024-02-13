<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type ="image/x-icon" href="ckc.png">
    
    <title>Results</title>

    <style>
        body{
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            overflow-x: hidden;

        }
        .main {
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          margin-top: -4%;
        }

        table {
          width: 60%;
          border-collapse: collapse;
        }

        th, td {
          padding: 5px;
          text-align: left;
          border: 1px solid #ccc;
        }

        th {
          background-color: #f2f2f2;
        }

        table:first-child {
          background-color: #f0f0f0;
        }

        h1{
            text-align: center;
        }

        h1, h2 {
            font-size: 150%;
            padding-bottom: -5%;
        }
        

        .th,
        .td {
            font-size: 12px;
        }

        table {
          background-color: #f0f0f0;
        }

        th {
          background-color: #d3d3d3;
        }

        tr:nth-child(2n) {
          background-color: #f7f7f7;
        }
        .pics{
          margin-left:10%;
        }
        .programs,.its,.ckcs,.dsa{
          height: 12%;
          width: 6%;
          margin-top:2%;

}
.banner{
  height:15%;
  width:9%;
  transform:translate(500%);
  border-radius:10%;
}

    </style>
</head>
<body>
<div class = "pics">
<img class = "ckcs"src="ckc.png" alt="">
        <img class = "its" src="it.png" alt="">
        <img class = "programs" src="program.png" alt="">
        <img class = "dsa" src="dsa.jpg" alt="">
        <img class = "banner" src="banner.jpg" alt="">
</div>

    <div class="main">
              


        <h1>Leaderboard</h1>

        <?php
      // Connect to the database
      $conn = mysqli_connect('localhost', 'root', '', 'pahinungod');

      // Check connection
      if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
      }

      // Get data from all three tables
      $judge1_query = "SELECT * FROM `judge_1`";
      $judge1_result = mysqli_query($conn, $judge1_query);


      if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
      }
      
      // Fetch the results from the combined_scores table
      $sql = "SELECT * FROM combined_scores ORDER BY category, total_score DESC";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        $currentCategory = null;
      
        while ($row = $result->fetch_assoc()) {
          if ($currentCategory !== $row['category']) {
            if ($currentCategory !== null) {
              echo '</table>';
            }
      
            echo '<h2> ' . $row['category'] . '</h2>';
            echo '<table style="background-color: #f0f0f0;">';
            echo '<tr style="background-color: skyblue;">';
            echo '<th style="background-color: skyblue;">Rank</th>';
            echo '<th style="background-color: skyblue;">Contestants</th>';
            echo '<th style="background-color: skyblue;">Judge 1</th>';
            echo '<th style="background-color: skyblue;">Judge 2</th>';
            echo '<th style="background-color: skyblue;">Judge 3</th>';
            echo '<th style="background-color: skyblue;">Total Score</th>';
            echo '</tr>';
      
            $currentCategory = $row['category'];
          }
      
          echo '<tr style="margin-top: 10%;">';
          echo '<td>' . $row['rank'] . '</td>';
          echo '<td>' . $row['name'] . '</td>';
          echo '<td>' . $row['judge1_total_score'] . '</td>';
          echo '<td>' . $row['judge2_total_score'] . '</td>';
          echo '<td>' . $row['judge3_total_score'] . '</td>';
          echo '<td>' . $row['total_score'] . '</td>';
          echo '</tr>';
         
        }
      
        echo '</table>';
      } else {
        echo "No results found";
      }

      echo '<p style="margin-top: 2%; text-align: left; font-size: 86%;">Results are calculated via a computer algorithm developed by the CKC Programmers` Club. All Rights Reserved © <br> In association with the Batchelor of Science in Information Technology (BSIT)</p>';
      

      
    // Close the database connection
    mysqli_close($conn);
    
    ?>
    </div>
</body>
</html>
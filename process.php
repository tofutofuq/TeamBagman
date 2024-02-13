<?php


$conn = new mysqli('localhost', 'root', '', 'pahinungod');

// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}


$sql = "SHOW TABLES LIKE 'combined_scores'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "Table 'combined_scores' already exists. Skipping table creation.";
} else {
  $sql = "CREATE TABLE IF NOT EXISTS combined_scores (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    category VARCHAR(255) NOT NULL,
    execution1 INT,
    choreography1 INT,
    chant1 INT,
    costume1 INT,
    execution2 INT,
    choreography2 INT,
    chant2 INT,
    costume2 INT,
    execution3 INT,
    choreography3 INT,
    chant3 INT,
    costume3 INT,
    total_execution INT,
    total_choreography INT,
    total_chant INT,
    total_costume INT,
    total_score INT,
    rank INT,
    judge1_total_score INT,
    judge2_total_score INT,
    judge3_total_score INT
  );";

  if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
}


$sql = "INSERT INTO combined_scores (
  name,
  category,
  execution1,
  choreography1,
  chant1,
  costume1,
  execution2,
  choreography2,
  chant2,
  costume2,
  execution3,
  choreography3,
  chant3,
  costume3,
  judge1_total_score,
  judge2_total_score,
  judge3_total_score
)
SELECT
  j1.name,
  j1.category,
  j1.execution,
  j1.choreography,
  j1.chant,
  j1.costume,
  j2.execution,
  j2.choreography,
  j2.chant,
  j2.costume,
  j3.execution,
  j3.choreography,
  j3.chant,
  j3.costume,
  j1.execution + j1.choreography + j1.chant + j1.costume AS judge1_total_score,
  j2.execution + j2.choreography + j2.chant + j2.costume AS judge2_total_score,
  j3.execution + j3.choreography + j3.chant + j3.costume AS judge3_total_score
FROM
  judge_1 j1
JOIN
  judge_2 j2
ON
  j1.id = j2.id
JOIN
  judge_3 j3
ON
  j2.id = j3.id;";

if ($conn->query($sql) === TRUE) {
  echo "Data inserted successfully";
} else {
  echo "Error inserting data: " . $conn->error;
}


$sql = "UPDATE combined_scores
SET total_execution = execution1 + execution2 + execution3,
total_choreography = choreography1 + choreography2 + choreography3,
total_chant = chant1 + chant2 + chant3,
total_costume = costume1 + costume2 + costume3,
total_score = execution1 + execution2 + execution3 + choreography1 + choreography2 + choreography3 + chant1 + chant2 + chant3 + costume1 + costume2 + costume3;";

if ($conn->query($sql) === TRUE) {
  echo "Totals updated successfully";
} else {
  echo "Error updating totals: " . $conn->error;
}


$sql = "UPDATE combined_scores cs
SET cs.rank = (
  SELECT COUNT(*) + 1
  FROM combined_scores c
  WHERE c.category = cs.category AND c.total_score > cs.total_score
)
ORDER BY category, total_score DESC;";

if ($conn->query($sql) === TRUE) {
  echo "Ranks updated successfully";
  header('Location: total(3).php'); 
} else {
  echo "Error updating ranks: " . $conn->error;
}


$conn->close();

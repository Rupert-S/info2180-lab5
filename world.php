<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$country = $_GET['country'];

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<ul>
<?php foreach ($results as $row): ?>
  <h3><?= $row['name']?></h3>
  <p><?= $row['name'] . ' is located in the ' . $row['region'] . ' included in the continent ' . $row['continent'] . '. It has a land mass of ' . $row['surface_area'] . ' km.' ; ?></p>
  <p><?= $row['name'] . ' is ruled by ' . $row['head_of_state'] . '. The country has a population of ' . $row['population'] . ' people with an average life expectancy of ' . $row['life_expectancy'] . ' years.'; ?></p>
<?php endforeach; ?>
</ul>

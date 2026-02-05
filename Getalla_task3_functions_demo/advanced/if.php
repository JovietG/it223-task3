<?php
include '../db.php';

$sql = "SELECT name, IF(salary > 50000, 'High', 'Low') AS result FROM users";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['result'] . "<br>";
}
?>
<?php
include '../db.php';

$sql = "SELECT name, MONTH(created_at) AS result FROM users";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['result'] . "<br>";
}
?>
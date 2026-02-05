<?php
include '../db.php';

$sql = "SELECT UPPER(name) AS upper_name FROM users";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row['upper_name'] . "<br>";
}



?>

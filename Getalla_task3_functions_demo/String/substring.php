<?php
include '../db.php';

$sql = "SELECT SUBSTRING(name,1,4) AS short_name FROM users";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row['short_name'] . "<br>";
}
?>

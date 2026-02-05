<?php
include '../db.php';

$sql = "SELECT name, IFNULL(phone, 'N/A') AS result FROM users";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['result'] . "<br>";
}
?>

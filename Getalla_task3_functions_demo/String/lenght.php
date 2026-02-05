<?php
include '../db.php';

$sql = "SELECT name, LENGTH(name) AS name_length FROM users";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['name_length'] . "<br>";
}
?>

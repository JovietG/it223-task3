<?php
include '../db.php';

$sql = "SELECT COUNT(*) AS total FROM users";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "Total users: " . $row['total'];
?>

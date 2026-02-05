<?php
include '../db.php';

$sql = "SELECT SUM(salary) AS total_salary FROM users";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo "Total salary: " . $row['total_salary'];
?>

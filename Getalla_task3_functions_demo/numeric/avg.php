<?php
include '../db.php';

$sql = "SELECT AVG(salary) AS avg_salary FROM users";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo "Average salary: " . round($row['avg_salary'], 2);
?>

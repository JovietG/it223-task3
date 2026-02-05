<?php
include '../db.php';

$sql = "SELECT MAX(salary) AS max_salary FROM users";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo "Highest salary: " . $row['max_salary'];
?>

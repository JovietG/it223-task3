<?php
include '../db.php';

$sql = "SELECT MIN(salary) AS min_salary FROM users";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo "Lowest salary: " . $row['min_salary'];
?>

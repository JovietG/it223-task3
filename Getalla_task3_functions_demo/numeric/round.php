<?php
include '../db.php';

$sql = "SELECT ROUND(salary,2) AS rounded_salary FROM users";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['rounded_salary'] . "<br>";
}
?>


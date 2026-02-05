<?php
include '../db.php';

$sql = "SELECT FLOOR(salary) AS floor_salary FROM users";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['floor_salary'] . "<br>";
}
?>

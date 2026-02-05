<?php
include '../db.php';

$sql = "SELECT CEILING(salary) AS ceil_salary FROM users";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['ceil_salary'] . "<br>";
}
?>

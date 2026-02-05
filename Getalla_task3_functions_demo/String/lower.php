<?php
include '../db.php';

$sql = "SELECT LOWER(email) AS lower_email FROM users";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row['lower_email'] . "<br>";
}
?>

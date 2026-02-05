<?php
include '../db.php';

$sql = "SELECT CONCAT(fname,' ',lname) AS full_name FROM users";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row['full_name'] . "<br>";
}
?>

<?php
include '../db.php';

$sql = "SELECT CURDATE() AS result";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row['result'];
}
?>
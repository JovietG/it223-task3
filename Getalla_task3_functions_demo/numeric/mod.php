<?php
include '../db.php';

$sql = "SELECT MOD(10,3) AS remainder";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo "Remainder: " . $row['remainder'];
?>

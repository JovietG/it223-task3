<?php
include '../db.php';

$sql = "SELECT ABS(balance) AS absolute_balance FROM accounts";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['absolute_balance'] . "<br>";
}
?>

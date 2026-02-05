<?php
include '../db.php';

$sql = "
SELECT name,
CASE
    WHEN salary > 60000 THEN 'High'
    WHEN salary BETWEEN 40000 AND 60000 THEN 'Medium'
    ELSE 'Low'
END AS result
FROM users
";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['result'] . "<br>";
}
?>

<?php
require 'db.php';

$sql = "SELECT * FROM test ORDER BY id DESC";
$stmt = $pdo->query($sql);
$people = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($people as $person) {
    echo "Name: " . htmlspecialchars($person['full_name']) . "<br>";
    echo "Age: " . $person['age'] . "<br>";
    echo "Sex: " . $person['sex'] . "<br><hr>";
}
?>

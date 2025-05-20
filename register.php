<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $full_name = $_POST['full_name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];

    $sql = "INSERT INTO test (full_name, age, sex) VALUES (:full_name, :age, :sex)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':full_name' => $full_name,
        ':age' => $age,
        ':sex' => $sex
    ]);

    echo "Registration successful!";
} else {
    echo "Invalid request.";
}
?>

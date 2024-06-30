<?php
include 'DBconnection.php';

$conn = connectDB();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];

    if (empty($name)) {
        header("Location: createAuthor.php?error=1");
        exit;
    }

    $sql = "INSERT INTO authors (name) VALUES ('$name')";

    if ($conn->query($sql)) {
        header("Location: createAuthor.php?success=1");
    }
}
?>
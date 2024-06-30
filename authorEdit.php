<?php
include 'DBconnection.php';

$conn = connectDB();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $newName = $_POST['name'];

    if (empty($newName)) {
        header("Location: editAuthor.php?error=1");
        exit;
    }

    $sql = "UPDATE authors SET name='$newName' WHERE id='$id'";

    if ($conn->query($sql)) {
        header("Location: editAuthor.php?success=1");
    }
}
?>
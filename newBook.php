<?php
include 'DBconnection.php';

$conn = connectDB();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $authorID = $_POST['author'];

    if (empty($title)) {
        header("Location: createBook.php?error1=1");
        exit;
    }

    if ($authorID == "0") {
        header("Location: createBook.php?error2=1");
        exit;
    }

    $sql = "INSERT INTO books (title, author_id) VALUES ('$title', '$authorID')";

    if ($conn->query($sql)) {
        header("Location: createBook.php?success=1");
    }
}
?>
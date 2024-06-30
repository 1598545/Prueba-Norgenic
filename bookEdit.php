<?php
include 'DBconnection.php';

$conn = connectDB();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bookID = $_POST['id'];
    $title = $_POST['title'];
    $authorID = $_POST['author'];

    if (empty($title)) {
        header("Location: editBook.php?error1=1");
        exit;
    }

    if ($authorID == "0") {
        header("Location: editBook.php?error2=1");
        exit;
    }

    $sql = "UPDATE books SET title='$title', author_id='$authorID' WHERE id='$bookID'";

    if ($conn->query($sql)) {
        header("Location: editBook.php?success=1");
    }
}
?>
<?php include 'templates/header.php';
include "DBconnection.php";
$conn = connectDB();

if (isset($_GET['id'])) {
    $book_id = $_GET['id'];

    $sql = "DELETE FROM books WHERE id='$book_id'";

    if ($conn->query($sql)) {
        header("Location: books.php?success=1");
    }
}
?>
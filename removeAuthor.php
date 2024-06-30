<?php include 'templates/header.php';
include "DBconnection.php";
$conn = connectDB();

if (isset($_GET['id'])) {
    $author_id = $_GET['id'];

    $sql = "DELETE FROM authors WHERE id='$author_id'";

    if ($conn->query($sql)) {
        header("Location: authors.php?success=1");
    }
}
?>
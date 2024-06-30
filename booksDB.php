<?php
include_once 'DBconnection.php';
$conn = connectDB();

function getBooks($conn) {
    $SQL = 'SELECT books.id, books.title, authors.name AS author FROM books JOIN Authors ON books.author_id = authors.id';
    $res = mysqli_query($conn, $SQL);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

$books = getBooks($conn);
?>
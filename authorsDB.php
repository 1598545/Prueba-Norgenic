<?php
include_once 'DBconnection.php';
$conn = connectDB();

function getAuthors($conn) {
    $SQL = 'SELECT * FROM authors';
    $res = mysqli_query($conn, $SQL);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

$authors = getAuthors($conn);
?>
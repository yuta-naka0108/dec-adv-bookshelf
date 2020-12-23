<?php 
include 'action.php';
$book_id = $_GET['book_id'];

$bookObj->DeleteBook($book_id);


?>
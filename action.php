<?php
include 'books.php';
$bookObj = new book;

if(isset($_POST['addnew'])){
    $BookTitle = $_POST['title'];
    $BookAuthor = $_POST['author'];
    $BookSynopsis = $_POST['synopsis'];
    $bookObj->addBooks($BookTitle, $BookAuthor, $BookSynopsis);
}else{
    echo "error";
}
?>
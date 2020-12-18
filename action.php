<?php
include 'books/books.php';
$bookObj = new book;

if(isset($_POST['addnew'])){
    $BookTitle = $_POST['title'];
    $BookAuthor = $_POST['author'];
    $BookSynopsis = $_POST['synopsis'];
    $bookObj->addBooks($BookTitle, $BookAuthor, $BookSynopsis);
}

if(isset($_POST['login'])){
    $uname = $_POST['username'];
    $pass = $_POST['password'];

    $bookObj->loginUser($uname,$pass);
   
        // $username = $row["user_name"];
        // $password = $row["user_password"];

    //     if($uname == $username && $pass == $password){
    //     $userid = $this->user_id;
    //     header("Location:homepage.php?user_id=$user_id");
        
    //    }else{
    //      echo "Your UserName or Password is wrong";
    //     }

    
}

if(isset($_POST['add'])){
    $name = $_POST['username'];
    $pass = $_POST['password'];

    $bookObj->AddBook($name, $pass);
}

if(isset($_POST['edit'])){
    $newUsername = $_POST['username'];
    $newEmail = $_POST['email'];
    $newTel = $_POST['tel'];
    $newPassword = $_POST['newpassword'];
    $password = $_POST['password'];
    

    $bookObj->Edituser($newUsername, $newEmail, $newTel, $newPassword, $password);
    
}

?>
 
<!-- class= book -->
<?php
    include 'books/datebase.php';

    class book extends BookDatebase{
        public function addBooks($BookTitle, $BookAuthor, $BookSynopsis){
             $sql = "INSERT INTO books(book_title, author, synopsis)VALUES('$BookTitle', '$BookAuthor', '$BookSynopsis')";
             $result = $this->conn->query($sql);
             if($result == TRUE){
                 header("Location:homepage.php");
             }else{
                 echo "error";
             }
        }

        public function DisplayBooks(){
            $sql = "SELECT book_title, author FROM books";
            $result = $this->conn->query($sql);

            if($result->num_rows>0){
                while($book_sh = $result->fetch_assoc()){
                    $booksarray[] = $book_sh;
                }
                return $booksarray;
            }
        }

        public function Edituser($newUsername, $newEmail, $newTel, $newPassword){
            $userid = $_GET['user_id'];
            $sql = "UPDATE `users` SET user_name = $newUsername, user_email = $newEmail, user_tel = $newTel, user_password = $newPassword WHERE user_id = $userid";
            $result = $this->conn->query($sql);

            if($result == TRUE){
                header("Location:homepage.php?user_id=$userid");
            }
        }
       
    }
?>
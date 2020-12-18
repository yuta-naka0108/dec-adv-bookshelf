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
            $sql = "SELECT book_title, author, synopsis FROM books";
            $result = $this->conn->query($sql);

            if($result->num_rows>0){
                while($book_sh = $result->fetch_assoc()){
                    $booksarray[] = $book_sh;
                }
                return $booksarray;
            }
        }

        public function Edituser($newUsername, $newEmail, $newTel, $newPassword, $password){
            $userid = $_SESSION['login_id'];
            // $sql = "SELECT * FROM user WHERE user_id = '$userid'";
            // $result = $this->conn->query($sql);
            // if($result->num_rows == 1){
            //     $sql2 = "UPDATE `users` SET user_name = $newUsername, user_email = $newEmail, user_tel = $newTel, user_password = $newPassword WHERE user_id = $userid";
            //     $result2 = $this->conn->query($sql2);

            //     if($result2 == TRUE){
            //         header("Location:homepage.php");
            //     }
            // }
            $getUserData = "SELECT * FROM user WHERE user_id = '$userid'";
            $result = $this->conn->query($getUserData);

            if($result->num_rows==1){
                $userData = $result->fetch_assoc();
                if($userData['user_password'] == $password){
                    $editUser = "UPDATE user SET  user_name = '$newUsername', user_email = '$newEmail', user_tel = '$newTel', user_password = '$newPassword' WHERE user_id = $userid";
                    $result2 = $this->conn->query($editUser);
                    if($result2 == TRUE){
                        header('location:homepage.php');
                    }else{
                        echo "<a href='edit.php'>Not Successful</a>";
                    }
                }else{
                    echo "<a href='edit.php'>Password is wrong</a>";
                }
            }
            
        }
        public function loginUser($username,$password){
            $sql = "SELECT * FROM user WHERE user_name = '$username' AND user_password ='$password'";
            $result = $this->conn->query($sql);
        
            if($result->num_rows == 1){
                $row = $result->fetch_assoc();
                $userID = $row['user_id'];

                // echo $userID;
                $_SESSION['login_id'] = $userID;
                header('location:homepage.php');
            }

        }

        public function AddBook($username, $password){
            $sql = "SELECT * FROM user WHERE user_name = '$username' AND user_password = '$password'";
            $result = $this->conn->query($sql);

            if($result->num_rows == 1){
                header('location:addbooks.php');
            }
        }

       
       
    }
?>

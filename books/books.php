<!-- class= book -->
<?php
    include 'books/datebase.php';

    class book extends BookDatebase{
        public function addBooks($BookTitle, $BookAuthor, $BookSynopsis, $userid){
             $sql = "INSERT INTO books(book_title, author, synopsis, user_id)VALUES('$BookTitle', '$BookAuthor', '$BookSynopsis', '$userid')";
             $result = $this->conn->query($sql);
             if($result == TRUE){
                 header("Location:homepage.php");
             }else{
                 echo "error";
             }
        }

        public function DisplayBooks(){
             $userid = $_SESSION['login_id'];
            $sql = "SELECT id, book_title, author, synopsis, user_id FROM books WHERE user_id = '$userid'";
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

        public function NewUser($newUsername, $newEmail, $newTel, $newPassword /*$confirm*/){          
            $sql = "INSERT INTO user (user_name,user_email,user_tel,user_password)VALUES('$newUsername','$newEmail','$newTel','$newPassword')";
            $result = $this->conn->query($sql);

            if($result==TRUE){
                header('location:loginpage.php');
            }else{
                die($this->conn->error.' error adding new user');
            }
        }

        public function DeleteBook($id){
            $sql = "DELETE FROM books WHERE id = $id";
            $result = $this->conn->query($sql);

            if($result == true){
                header('location:homepage.php');
            }else{
                echo "somethings wrong";
            }
        }

        public function DeeleteAccount($userid){
            $sql = "DELETE FROM user WHERE user_id = $userid";
            $result = $this->conn->query($sql);

            if($result == TRUE){
                header("location:loginpage.php");
            }else{
                echo "error";
            }

        }
        public function getOneUser($sessionID){
            $sql = "SELECT * FROM user WHERE user_id = $sessionID";
            $result = $this->conn->query($sql);
            if($result == FALSE){
                echo "no match detected";
            }else{
                return $result->fetch_assoc();
            }

        }

       
       
    }
?>

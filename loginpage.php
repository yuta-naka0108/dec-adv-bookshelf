<?php include 'books/datebase.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Log In</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-3"></div>
              <div class="col-6">
                  <h1 class="display-4">YOUR ONLINE BOOKSHELF</h1>
                  <form action="" method="post">
                    <div class="form-body">
                      <div class="form-group">
                          <input type="text" name="username" placeholder="Username" class="form-control">
                      </div>
                      <div class="form-group">
                          <input type="password" name="password" placeholder="Password" class="form-control">
                      </div>
                      <div class="form-group">
                          <input type="submit" name="login" value="Login" class="form-control btn btn-primary">
                      </div>
                    </div>
                    <div class="form-body">
                        <div class="form-group">
                            <a href="newaccount.php" class="text-danger"><i class="fas fa-user-plus"></i>Create New Account</a>
                        </div>
                    </div>
                  </form>
                  <?php
                    if(isset($_POST['login'])){
                        $uname = $_POST['username'];
                        $pass = $_POST['password'];
                        $sql = "SELECT user_name, user_password FROM `user`";

                        if($result-> $num_rows > 0){
                            $row = $result->fetch_assoc();
                            $username = $row["user_name"];
                            $password = $row["user_password"];
                            if($uname == $username && $pass == $password){
                            $userid = $this->user_id;
                            header("Location:homepage.php?user_id=$user_id");
                            
                           }else{
                             echo "Your UserName or Password is wrong";
                            }
                    
                        }
                    }
                        
                        
                  ?>
                  
              </div>
              <div class="col-3"></div>
          </div>
      </div>
      
  </body>
  </html>
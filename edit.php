<?php include 'books.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Edit Account</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <header>
          <ul class="navbar-nav">
              <li class="nav-item active">
                  <a href="homepage.php">HOME</a>
              </li>
              <li class="nav-item">
                   <a href="about.php">ABOUT US</a>
              </li>
              <li class="nav-item">
                  <a href="contact.php">CONTACT</a>
              </li>
              <li class="nav-item">
                  <a href="config.php">CONFIG</a>
              </li>
          </ul>
      </header>

      <div class="container">
          <div class="row">
              <div class="col-2"></div>
              <div class="col-8">
                  <form action="" method="post">
                      <div class="form-body">
                          <div class="form-group">
                              <input type="text" name="username" placeholder="New Username" class="form-control">
                          </div>
                          <div class="form-group">
                              <input type="email" name="email" placeholder="New Email" class="form-control">
                          </div>
                          <div class="form-group">
                              <input type="number" name="tel" placeholder="New Your Contact Number" class="form-control">
                          </div>
                          <div class="form-group">
                              <input type="password" name="newpassword" placeholder="New Password" class="form-control">
                          </div>
                      </div>
                      <div class="form-body">
                          <div class="form-group">
                              <input type="password" name="password" placeholder="Curent Password" class="form-control">
                          </div>
                      </div>
                      <div class="form-body">
                          <div class="form-group">
                              <input type="submit" value="Submit" name="submit" class="form-control btn btn-primary">
                          </div>
                      </div>
                  </form>
                  <?php
                    if(isset($_POST['submit'])){
                        require_once 'datebase.php';
                        $password = $_POST['password'];
                        $sql = "SELECT user_password FROM `users`";
                        $user_password = $this['user_password'];
                        if($password == $user_password){
                            $newUsername = $_POST['username'];
                            $newEmail = $_POST['email'];
                            $newTel = $_POST['tel'];
                            $newPassword = $_POST['newpassword'];
                            $bookObj->Edituser($newUsername, $newEmail, $newTel, $newPassword);
                            
                        }
                    }else{
                        echo "Your Password Is Not Correct";
                    }
                  ?>
              </div>
              <div class="col-2"></div>
          </div>
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
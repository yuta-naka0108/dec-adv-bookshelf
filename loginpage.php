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
                  <h1 class="display-4 pt-5">YOUR ONLINE BOOKSHELF</h1>
                  <form action="action.php" method="post">
                    <div class="form-body pt-2">
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
                    
                        
                        
                  ?>
                  
              </div>
              <div class="col-3"></div>
          </div>
      </div>
      
  </body>
  </html>
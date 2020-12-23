<?php include 'books/books.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Add Books</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <header>
          <ul class="navbar-nav bg-dark">
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
              <a href="loginpage.php" class="btn btn-outline-danger ml-auto mb-3">Log Out</a>
          </ul>
      </header>
      <div class="container-fluid">
          <div class="row">
              <div class="col-3"></div>
              <div class="col-6">
                  <form action="action.php" method="post">
                      <div class="form-body pt-5">
                          <h3 class="text-center">Add New Books</h3>
                          <div class="form-group pt-2">
                              <input type="text" name="title" placeholder="Title" class="form-control">
                              <input type="text" name="author" placeholder="Author" class="form-control">
                              <input type="text" name="synopsis" placeholder="Synopsis" class="form-control">
                              
                          </div>
                          <div class="form-group pt-3">
                              <input type="submit" name="addnew" value="Add New" class="form-control btn btn-primary">
                          </div>
                      </div>
                  </form>

                  
                 
              </div>
              <div class="col-3"></div>
          </div>
      </div>

      <footer>
          <div class="container-fluid fixed-bottom">
              <div class="row">
                  <div class="col-12 bg-dark">
                        <ul class="navbar-nav float-left pl-3">
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
                                <a href="config.php?user_id=<?php $userid=$_SESSION['login_id'];
                                echo $userid; ?>">CONFIG</a>
                            </li>
                        </ul>
                    </div>
                </div>
              
            </div>   
      </footer>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
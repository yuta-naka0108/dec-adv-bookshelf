<!doctype html>
<html lang="en">
  <head>
    <title>Contact Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
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
                  <a href="config.php?user_id=<?php $userid = $_GET['user_id'];
                  echo $userid; ?>">CONFIG</a>
              </li>
              <a href="loginpage.php" class="btn btn-outline-danger ml-auto mb-3">Log Out</a>
          </ul>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="card">
                    <div class="card-header bg-info">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-body">
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" name="fname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" name="lname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-Mail</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="tel">Your Contact Number</label>
                                    <input type="number" name="tel" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="comment">Comment</label>
                                    <input type="textarea" name="comment" id="" class="form-control">
                                </div>
                            </div>
                            <div class="form-body">
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="form-control btn btn-primary">
                                </div>
                            </div>                         
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <footer>
          <div class="container-fluid relative-bottom">
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
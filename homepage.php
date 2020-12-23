<?php
    include 'action.php';
    // ECHO $_SESSION['login_id'];
    // $_SESSION['beer'] = "yuta"
    
?>

<!doctype html>
<html lang="en">
  <head>
    <title>homepage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=devqice-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <header>
          <ul class="navbar-nav bg-dark pl-3">
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
              <a href="loginpage.php" class="btn btn-outline-danger ml-auto mb-3">Log Out</a>

          </ul>
          
      </header>
      <div class="container-fluid">
          <div class="row">
              <div class="col-2 bg-warning">
                  <a href="amazon.com" class="btn btn-outline-danger mt-5 text-dark">Buy New Book</a>
              </div>
              <div class="col-8 p-0">
                  <table class="table table-bordered border-collapse bg-success">
                      <thead>
                          <th>Book Title</th>
                          <th>Author</th>
                          <th>Synopsis</th>
                          <th></th>                        
                      </thead>
                      <tbody>
                          <?php
                        //   print_r($bookObj->DisplayBooks());
                            foreach($bookObj->DisplayBooks() as $books):
                                $book_id = $books['id'];
                          ?>
                          <tr>
                              <td><?php echo $books['book_title']; ?></td>
                              <td><?php echo $books['author']; ?></td>
                              <td><?php echo $books['synopsis']; ?></td>
                              <td><a href="deletebook.php?book_id=<?php echo $book_id ?>"  class="btn btn-outline-danger">Delete</a></td>
                          </tr>

                          <?php
                            endforeach;
                          ?>
                      </tbody>
                  </table>
              </div>
              <div class="col-2 bg-warning">
                  <form action="" method="post">
                      <div class="form-body">
                          <div class="form-group pt-3">
                              <label for="username">Add New Books</label>
                              <input type="text" name="username" placeholder="Username" class="form-control">
                          </div>
                          <div class="form-group">
                               <input type="password" name="password" placeholder="Password" class="form-control">
                          </div>
                      </div>
                      <div class="form-body">
                          <div class="form-group">
                              <input type="submit" name="add" value="Add" class="form-control btn btn-primary">
                          </div>
                      </div>
                  </form>
              </div>

             
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
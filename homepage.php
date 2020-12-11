<?php
    include 'action.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <title>homepage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <header class="bg-success">
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
                  <a href="config.php?user_id=<?php $userid = $_GET['user_id'];
                  echo $userid; ?>">CONFIG</a>
              </li>
          </ul>
      </header>
      <div class="container">
          <div class="row">
              <div class="col-8">
                  <table class="table table-bordered bg-success">
                      <thead>
                          <th>Book Title</th>
                          <th>Author</th>                         
                      </thead>
                      <tbody>
                          <?php
                            foreach($bookObj->DisplayBooks() as $books):
                          ?>
                          <tr>
                              <td><?php echo $books['book_title']; ?></td>
                              <td><?php echo $books['book_author']; ?></td>
                          </tr>

                          <?php
                            endforeach;
                          ?>
                      </tbody>
                  </table>
              </div>
              <div class="col-2">
                  <form action="" method="post">
                      <input type="text" name="username" placeholder="Username" class="form-control">
                      <input type="password" name="password" placeholder="Password" class="form-control">
                      <input type="submit" name="add" value="Add New Books" class="form-control btn btn-primary">
                  </form>
              </div>

              <?php
                if(isset($_POST['add'])){
                    require_once 'datebase.php';
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $sql = "SELECT user_id, user_name, user_password FROM `user`";
                    $result = $conn->query();
                    if($result-> $num_rows > 0){
                        $row = $result->fetch_assoc();
                        $userid = $row['user_id'];
                        $user_name = $row['user_name'];
                        $user_password = $row['user_password'];
                        $_SESSION['login_id'] = $userid; 
                    }if($username == $user_name && $password == $user_password){
                        header("Location:addbooks.php");
                    }else{
                        echo "Error";
                    }
                }
              ?>
          </div>
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
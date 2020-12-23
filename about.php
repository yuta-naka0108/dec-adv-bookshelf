<!doctype html>
<html lang="en">
  <head>
    <title>About Us</title>
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
                    <h1 class="display-4">About Us</h1>
                </div>
                <div class="card-group font-weight-bolder">
                    <p class="font-italic">
                        We are ... Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati, cum consectetur. Vel nostrum aliquid laudantium sapiente illum nobis porro inventore, corrupti expedita quidem veniam eligendi. Quaerat soluta, nisi eius saepe fugit similique perspiciatis excepturi ad numquam aperiam minima rerum at sunt, quod impedit, iure ipsa eum aspernatur et. Dolore dolor accusantium, vero animi consequatur aperiam velit, temporibus distinctio placeat et reiciendis numquam omnis repellat tenetur adipisci quasi, corrupti totam soluta nisi rerum ut. Eos repudiandae explicabo, beatae excepturi nisi similique ea voluptates quo expedita porro fugit sapiente ducimus laborum non, eaque corrupti nobis odit pariatur omnis dicta? Eos earum esse qui iure eum ab assumenda, eius reiciendis, repellat incidunt vitae delectus, consequuntur quisquam temporibus voluptatibus sequi ut eveniet veritatis ipsa. Cumque inventore, quo quaerat fuga maiores nam odio officia provident nisi libero molestiae hic ut molestias, eligendi tenetur. Sunt ut molestiae vitae expedita. Cumque libero debitis architecto animi ullam, rem totam dolorum voluptatum laborum placeat voluptates. Dolore mollitia iste doloribus ratione animi rem repellat, quidem quod facere provident facilis blanditiis eius consequuntur ab beatae, eligendi eaque deserunt neque voluptates maxime explicabo! Est, vel incidunt maiores vitae commodi quae impedit debitis, nisi et neque doloremque possimus sunt aperiam vero quam fugit.
                    </p>
                    
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
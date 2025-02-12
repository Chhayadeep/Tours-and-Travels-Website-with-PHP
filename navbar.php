<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
  <!-- bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
  <title>Hometour</title>

  
</head>
<body>

  <!-- navigation bar -->
  <nav class="navbar fixed-top navbar-expand-md py-3 navbar-dark p-md-3 shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand fs-3 ms-3">Paradise</a>
      <button type="button" class="navbar-toggler shadow-none" data-bs-target="#navbarNav" data-bs-toggle="collapse"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle Navbar">
        <i class="bx bx-menu"></i>
        <span style="display: inline-block;">&#9776;</span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item" >
            <a href="newhome.php" class="nav-link active text-white" aria-current="page">Home</a>
          </li>
          <li class="nav-item">
            <a href="destination.php" class="nav-link text-white">Destination</a>
          </li>
          <li class="nav-item">
            <a href="f.php" class="nav-link text-white">Gallery</a>
          </li>
          <li class="nav-item">
            <a href="contact.php" class="nav-link text-white">ContactUs</a>
          </li>
          <li class="nav-item">
            <a href="differ.php" class="nav-link text-white">Packages</a>
          </li>
          <li>
          <div class="nav-item">
            <button type="button" class="btn btn-outline-dark shadow-none me-3 me-lg-2" data-bs-toggle="modal" data-bs-target="#LoginModal">
              Login
            </button>
          </div>
        </li>
        </ul>
        <div>
          <?php
          $count=0;
          if(isset($_SESSION['cart']))
          {
            $count=count($_SESSION['cart']);
          }
          ?>
            <a href="mycart.php" class="btn btn-outline-success">My cart <?php echo $count;?></a>
        </div>
      </div>
    </div>
    
  </nav>
  <div class="modal fade p-5" id="LoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form action="newhome.php" method="post">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-circle fs-3 me-2"></i>User Login
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <div class="form-floating">
              <input type="email" class="form-control shadow- none" name="loginemail" required>
              <label class="col-form-label" >Email address</label>             
              </div> 
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control shadow- none" name="loginame" required>
              <label class="form-label" >Name</label>  
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control shadow- none" name="loginpsd" required>
              <label class="form-label" >Password</label>  
            </div>
            <div class="d-flex justify-content-end">              
              <a href="javascript:void(0)" class="text-secondary text-decoration-none">Forgot Password</a>
            </div>
            <button class="btn btn-dark shadow-none my-4 w-100" type="submit">Login</button>
            <div class="text-center text-muted text-uppercase mb-3">
              or
            </div>
            <div class="d-flex align-items-center justify-content-center">
            <a href="#" class="btn btn-light login_with w-95 mb-3 ">
              <i class="bi bi-google me-3"></i>
            </a>
            
            <a href="#" class="btn btn-light login_with w-70 mb-3 ">
              <i class="bi bi-facebook me-3"></i>
            </a>
       
            <a href="#" class="btn btn-light login_with w-70 mb-3 ">
              <i class="bi bi-linkedin me-3"></i>
            </a>
            </div>

            <p> Don't have an account <a href="registerform.php"> Register now</a></p>
            </div>
          </div>


      </form>
    </div>
  </div>
        </body>
        </html>
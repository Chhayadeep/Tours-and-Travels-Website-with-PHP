<?php
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include 'C:\wamp\www\new\connect.php';
$logmail=$_POST['loginemail'];
$logpsd=$_POST['loginpsd'];
$logname=$_POST['loginame'];
// insertion
$sql_query="select * from register where email='$logmail' AND password='$logpsd'";
$result=mysqli_query($conn,$sql_query);
$num=mysqli_num_rows($result);
if($num==1){
  $login=true;
  session_start();
  $_SESSION['loggedin']=true;
  $_SESSION['logmail']=$logmail;
  header("location: file1.php");
}
else{
  $showError="Invalid Credentials";
}
}
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

  <link rel="stylesheet" href="home.css">
</head>

<body>
<?php
include 'navbar.php';
if($login){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Your login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if($showError){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> '.$showError.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
  <!-- navigation bar -->
  <!-- <nav class="navbar fixed-top navbar-expand-md py-3 navbar-dark p-md-3 shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand fs-3 ms-3">Paradise</a>
      <button type="button" class="navbar-toggler shadow-none" data-bs-target="#navbarNav" data-bs-toggle="collapse"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle Navbar">
        <i class="bx bx-menu"></i>
        <span style="display: inline-block;">&#9776;</span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active text-white" aria-current="page">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white">Destination</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white">Gallery</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white">Contact Us</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white">Packages</a>
          </li>
          <li>
            <div class="nav-item">
              <button type="button" class="btn btn-outline-dark shadow-none me-3 me-lg-2" data-bs-toggle="modal"
                data-bs-target="#LoginModal">
                Login
              </button>
            </div>
          </li>
        </ul>

      </div>
    </div>

  </nav> -->
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
  </div>
  <!-- slider banner image -->
  <div  class="carousel slide  carousel-fade" data-bs-ride="carousel" id="carouselExampleSlidesOnly">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Blogs for Self-Publishers, January 16 - 22, 2016.jpg" class="d-block w-100" alt="..." data-bs-interval="1000" style="height: 100vh; ">
        <div class="carousel-caption d-md-block  p-5 align-items-center text-center">
        <h5  class="text-center"><b>Explore The India</b></h5>
        <p>Highest quality services, professionals trip management</p>
        <div class="slider-btn mt-4">
       
          <button type="button" class="btn btn-dark"> services</button>
        </div>
      </div>
      </div>
      <div class="carousel-item">
        <img src="What to wear in Rajasthan_ Travel Outfit Ideas.jpg" class="d-block w-100" alt="..." data-bs-interval="1000" style="height: 100vh;">
        <div class="carousel-caption d-md-block  p-5 align-items-center text-center">
          <h5 class="text-center">Creative Package</h5>
          <p>Say Yes to new Adventure</p>
          <div class="slider-btn mt-4">
            <button type="button" class="btn btn-primary">services</button>
         
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Musamman Burj dome ancient architecture at Agra Fort at sunset - Web Ready ( Width 1920 px ), Standard License.jpg" class="d-block w-100" alt="..." data-bs-interval="1000" style="height: 100vh;">
        <div class="carousel-caption d-md-block  p-5 align-items-center text-center">
          <h5  class="text-center">Never Stop Exploring</h5>
          <p>Freedom to travel with a sense of purpose/p>
          <div class="slider-btn mt-4">
          
            <button  type="button" class="btn btn-primary "> services</button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- <div class="d-flex justify-content-center align-items-center ">
    <img class="mySlides" src="Blogs for Self-Publishers, January 16 - 22, 2016.jpg">

    <img class="mySlides" src="nno.jpg">
    <img class="mySlides"
      src="Musamman Burj dome ancient architecture at Agra Fort at sunset - Web Ready ( Width 1920 px ), Standard License.jpg">
  </div> -->

  <script>
    // var myIndex = 0;
    // carousel();

    // function carousel() {
    //   var i;
    //   var x = document.getElementsByClassName("mySlides");
    //   for (i = 0; i < x.length; i++) {
    //     x[i].style.display = "none";
    //   }
    //   myIndex++;
    //   if (myIndex > x.length) { myIndex = 1 }
    //   x[myIndex - 1].style.display = "block";
    //   setTimeout(carousel, 3000); // Change image every 2 seconds
    // }
    var nav = document.querySelector('nav');
    window.addEventListener('scroll', () => {
      if (window.pageYOffset > 100) {
        nav.classList.add('bg-black', 'shadow');
      }
      else {
        nav.classList.remove('bg-black', 'shadow');
      }
    });

  </script>

  <!-- Destination Form -->
  <div class="travelcheck">
    <div class="d-flex bg-black">
      <div class="container">
        <div class="row p-4">
          <div class="col-sm-12 bg-secondary shadow p-4 rounded">
            <h5 class="text-wrap">Find Your Destination</h5>
            <form class="row gx-3 gy-2 align-items-end">
              <div class="col-sm">
                <label class="col-sm-2 col-form-label">When</label>
                <input type="date" class="form-control" placeholder="dd-mm-yy">
              </div>
              <div class="col-sm">
                <label class="col-sm-2 col-form-label">Where</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Destination">
                </div>
              </div>
              <div class="col-sm">
                <label class="col-sm-2 col-form-label">Duration</label>
                <select class="form-select">
                  <!-- <option selected>Choose...</option> -->
                  <option selected="1">1 Day</option>
                  <option value="2">2-3 Days</option>
                  <option value="5">4-5 Days</option>
                  <option value="7">7+ Days</option>
                </select>
              </div>
              <div class="col-auto">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">
                    Remember me
                  </label>
                </div>
              </div>
              <div class="col-auto mt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="benefits d-flex bg-dark">
    <div class="container bg-dark ">
      <div class="row gy-3 my-3 text-center">
        <div class="col-sm-4 col-md-4 mb-5 px-4">
          <div class="bg-white rounded shadow p-3 pop h-100">
            <div class="d-flex align-items-center mb-2 justify-content-center">
              <i class="bi bi-tags-fill "></i>
            </div>
            <h4 class="m-0 ms-3">Best Price Gurantee</h4>
            <div class="d-flex align-items-center">
              <p>There are many variations of but the majority have</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-4 mb-5 px-4">
          <div class="bg-white rounded shadow p-3 pop h-100">
            <div class="d-flex align-items-center mb-2 justify-content-center">
              <i class="bi bi-laptop-fill"></i>
            </div>
            <h4 class="m-0 ms-3">Easy And Quick Booking</h4>
            <div class="d-flex align-items-center">
              <p>There are many variations of but the majority have</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-4 mb-5 px-4">
          <div class="bg-white rounded shadow p-3 pop h-100">
            <div class="d-flex align-items-center mb-2 justify-content-center">
              <i class="bi bi-globe-central-south-asia"></i>
            </div>
            <h4 class="m-0 ms-3">Best Tour Selection</h4>
            <div class="d-flex align-items-center">
              <p>There are many variations of but the majority have</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="d-flex flex-row p-5 bg-black">
    <div class="container">
      <div class="row gy-3 my-3">
        <div class="text d-flex justify-content-center">
          <h2v style="color: beige; font-size: 1.2rem;">-------Explore Great Places</h2>
            <h3 style="font-size: 3rem;
          font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
          color: aliceblue;">Top Destination</h3>
        </div>
        <!-- <div class="p-2 bd-highlight"> -->

        <div class="col-sm-6 col-md-4 col-lg-3" style="padding-top: 2rem;">
          <div class="card">
            <img src="10 Best Places To Visit In Gujarat.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Beaches Paradise-Goa</h5>
              <p class="card-text">6 Days/ 5 Nights</p>
              <a href="booknow.php" class="btn btn-primary">Book Now</a>
            </div>
          </div>
        </div>


        <!-- <div class="p-2 bd-highlight"> -->
        <div class="col-sm-6 col-md-4 col-lg-3" style="padding-top: 2rem;">
          <div class="card">
            <img src="10 Best Places To Visit In Gujarat.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gujrat Classical Tour</h5>
              <p class="card-text">6 Days/ 5 Nights</p>
              <a href="#" class="btn btn-primary">Book Nowe</a>
            </div>
          </div>
        </div>


        <!-- <div class="p-2 bd-highlight"> -->
        <div class="col-sm-6 col-md-4 col-lg-3" style="padding-top: 2rem;">
          <div class="card">
            <img src="10 Best Places To Visit In Gujarat.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Incredible Andaman</h5>
              <p class="card-text">8 Days/ 7 Nights</p>
              <a href="#" class="btn btn-primary">Book Now</a>
            </div>
          </div>
        </div>

        <!-- <div class="p-2 bd-highlight"> -->
        <div class="col-sm-6 col-md-4 col-lg-3" style="padding-top: 2rem;">
          <div class="card">
            <img src="10 Best Places To Visit In Gujarat.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Romance with Taj</h5>
              <p class="card-text">3 Days / 2 Nights</p>
              <a href="#" class="btn btn-primary">Book Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12  mt-5  text-center">
        <a href="" class="btn btn-outline-dark rounded-0 fw-bold btn-secondary">More Destination>></a>
      </div>
    </div>
  </div>


  <div class="d-flex flex-row bg-dark">
    <div class="container d-flex p-5">
      <div class="row">
        <div class="text d-flex justify-content-center">
          <h2v style="color: beige; font-size: 1.2rem;"> -------Bespoke Experience-------</h2>
            <h3 style="font-size: 3rem;
          font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
          color: aliceblue;">Magical Memories</h3>
        </div>
        <div class="col-md-4 col-sm-12 co-xs-12 gal-item">
          <!-- <div class="row mb-2">
            <img src="Avoid Visa Hassles & Choose From These 60 Honeymoon Places In India Instead.jpg">
          </div> -->
          <div class="row mb-2" style="padding-bottom: 20px;">
            <div class="content">
              <a href="" target="_blank">
                <div class="content-overlay"></div>
                <img class="content-image" src="Rampuria Havelis of Bikaner_ A stunning photo-story from Rajasthan.jpg"
                  alt="">
                <div class="content-details fadeIn-bottom fadeIn-right">
                  <h3>BIKANER</h3>
                  <!-- <p>This is a short description</p> -->
                </div>
              </a>
            </div>
          </div>
          <div class="row mb-2" style="padding-bottom: 20px;">
            <div class="content">
              <a href="" target="_blank">
                <div class="content-overlay"></div>
                <img class="content-image" src="Explore hidden mysteries of nature with top Cruise Rides of India.jpg"
                  alt="" style="height: 280px;">
                <div class="content-details fadeIn-bottom fadeIn-right">
                  <h3>KERALA</h3>
                  <p>This is a short description</p>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 co-xs-12 gal-item">
          <div class="row mb-2" style="padding-bottom: 20px;">
            <div class="content">
              <a href="" target="_blank">
                <div class="content-overlay"></div>
                <img class="content-image" src="10 Timeless Cities Where the Past Comes to Life.jpg" alt="">
                <div class="content-details fadeIn-bottom fadeIn-right">
                  <h3>VARANASI</h3>
                  <!-- <p>This is a short description</p> -->
                </div>
              </a>
            </div>
          </div>
          <div class="row mb-2" style="padding-bottom: 20px;">
            <div class="content">
              <a href="" target="_blank">
                <div class="content-overlay"></div>
                <img class="content-image" src="The Mysore Palace.jpg" alt="">
                <div class="content-details fadeIn-bottom fadeIn-right">
                  <h3>THE MYSORE</h3>
                  <!-- <p>This is a short description</p> -->
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 co-xs-12 gal-item">
          <div class="row mb-2" style="padding-bottom: 20px;">
            <div class="content">
              <a href="" target="_blank">
                <div class="content-overlay"></div>
                <img class="content-image"
                  src="Mulbekh, Ladakh, Jammu and Kashmir State, India_ _ Blaine Harrington III.jpg" alt="">
                <div class="content-details fadeIn-bottom fadeIn-right">
                  <h3>LADDAK</h3>
                  <!-- <p>This is a short description</p> -->
                </div>
              </a>
            </div>
          </div>
          <div class="row mb-2" style="padding-bottom: 20px;">
            <div class="content">
              <a href="" target="_blank">
                <div class="content-overlay"></div>
                <img class="content-image" src="What to See and Do in Sikkim_ A Real Himalayan Shangri-La in India.jpg"
                  alt="" style="height: 280px;">
                <div class="content-details fadeIn-bottom fadeIn-right">
                  <h3>SIKKIM</h3>
                  <!-- <p>This is a short description</p> -->
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12  mt-3  text-center">
          <a href="" class="btn btn-outline-dark rounded-0 fw-bold btn-secondary">View More>></a>
        </div>
      </div>

    </div>
  </div>


  <div class="d-flex flex-row p-4 bg-black justify-content-center">
    <div class="row mb-2">
      <div class="col-md-5">
        <div class="text d-flex" style="margin-top: 50px;">
          <h2v style="color: beige; font-size: 1.2rem; ">Get to know us</h2>
            <h3 style="font-size: 3rem;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            color: aliceblue;">Change your Place to get Fresh Air</h3>
            <h3> We're Travel Agency</h3>
            <div class="newspaper">
              <ul>
                <li>Trust and Safety</li>
                <li>Easy & Quick Booking </li>
              </ul>
              <ul>
                <li>Best Price Gurantee</li>
                <li>Best Travel Agents</li>
              </ul>
            </div>
        </div>
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-5">
        <img src="Aberrant Beauty.jpg" style="height: auto; width: 100%;">
      </div>
    </div>
  </div>

 

  <div class="d-flex p-3">
    <div class="row">

      <div class="col-md-7">

        <img src="Top-Things-to-Do-in-Jammu-and-Kashmir.jpg" style="height: 100%; width: 100%;">
      </div>
      <div class="col-md-5" style="font-family: Arial, Helvetica, sans-serif;">
        <h3 style="color: black; padding-top: 20px; text-align: center;"><a href="about us.php">About Us</a></h3>
        <p style="color: black; padding-top: 55px;">
          <b>PICK DESTI is a tourist guide website for those traveling to India. Our primary goal is to provide a guide
            and relevant information that will assist tourists planning to visit India. We also provide information on
            the
            lesser-known areas that will make a great vacation spot for those traveling to India. Encouraging tourism to
            India is not only doing the economy a favor but helping to foster unity in the world. Encouraging tourism is
            also a way of helping people to take a break from their busy schedule to relax which is generally good for
            maintaining optimal health.</b>
        </p>
      </div>
    </div>
  </div>
  <!-- gallery -->


  <!-- footer area-->
  <section class="footer">
    <div class="box-container p-5">
      <div class="box">
        <h3>Quick Links</h3>
        <a href="#">Home</a>
        <a href="#">About Us</a>
        <a href="#">Packages</a>
        <a href="#">Book</a>
      </div>

      <div class="box">
        <h3>Extra Links</h3>
        <a href="#">Ask Questio</a>
        <a href="#">About</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of use</a>
      </div>

      <div class="box">
        <h3>Contact info</h3>
        <a href="#">91 9896774891</a>
        <a href="#">91 587668</a>
        <a href="#">2147@gmail.com</a>
        <a href="#">Panjab India-141001</a>
      </div>

      <div class="col-md-6">
        <h3>Follow Us</h3>
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-twitter"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

  </section>
</body>

</html>
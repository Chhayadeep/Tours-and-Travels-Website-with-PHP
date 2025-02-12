<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
   

    .carousel-inner img {
      width: 100%;
      height: 500px;
    }

    .carousel-caption h3 {
      font-size: 6vw;
      padding-bottom: 11rem;
      text-align: center;
      display: flex;
      font-weight: bold;
      color:rgb(255, 255, 255);
      justify-content: center;
    }

    .zoombox {
      background-color:#333;
      overflow: hidden;
    }

    .zoombox img.zoomboximg {
      width: 100%;
      height: 240px;
      transform: scale(1.5);
      transition: 2s ease-in;
      animation-duration: 10s;
    }

    .zoombox .zoomboxDiv {
      position: absolute;
      right: 60px;
      left: 60px;
      top: 60px;
      bottom: 60px;
      display: block;
      background-color: transparent;
      border: 1px solid #fff;
      padding: 30px;
      text-align: center;
      justify-content: center;
      color: whitesmoke;
      transform: scale(0);
      font-weight: BOLD;
      transition: 0.5s ease-in-out;
    }

    .col-sm-4 {
      padding:10px;
    }

    .bottom-left {
      position: relative;
      bottom: 11px;
      left: 20px;
      font-weight: bold;
      color:white;

    }

    .zoombox:hover img.zoomboximg {
      opacity: .3;
      transform: scale(1);
    }

    .zoombox:hover .zoomboxDiv {
      transform: scale(1);
    }

    head,
    body {
      background-color: rgba(0, 0, 0, 0.9);
    }

    
  </style>
</head>

<body>
  <?php
  include 'navbar.php';
  ?>
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
      <li data-target="#demo" data-slide-to="4"></li>
      <li data-target="#demo" data-slide-to="5"></li>
    
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./vecteezy_day-trip-to-ko-phi-phi-in-thailand-southern-islands__885.jpg">
        <div class="carousel-caption ">
          <h3>DESTINATION</h3>

        </div>
      </div>
    
      <div class="carousel-item ">
        <img src="./vecteezy_panorama-banner-background-of-tropical-forest-landscape_6831699_891.jpg">
        <div class="carousel-caption ">
          <h3>ADVENTURE!!</h3>

        </div>
      </div>
      <div class="carousel-item ">
        <img src="./vecteezy_young-tourist-couple-watching-spectacular-mountain-scenery_10621909_29.jpg"style="filter: blur(5px);
        -webkit-filter: blur(5px);">
        <div class="carousel-caption ">
          <h3>Make Your Way!!</h3>
          </div>
          </div>
      <div class="carousel-item ">
        <img src="./vecteezy_day-trip-to-ko-phi-phi-in-thailand-southern-islands__885.jpg">
        <div class="carousel-caption ">
          <h3>EXPLORATION!!</h3>

        </div>
      </div>
     
    
      <div class="carousel-item">
        <img src="./vecteezy_traveler-travel-asian-young-woman-or-girl-use-camera-take_21618171_768.jpg"style="filter: blur(4px);
        -webkit-filter: blur(4px);">
        <div class="carousel-caption">
          <h3>ENJOY!!</h3>
        </div>
      </div>
  
      <div class="carousel-item">
        <img src="./vecteezy_piazza-de-spagna-in-rome-italy-at-night_1309568.jpg" style="filter: blur(6px);
        -webkit-filter: blur(6px);">
        <div class="carousel-caption ">
          <h3>Book Now!!!</h3>
         
        </div>
      </div>
      
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
 <div class="container-fluid" style="height:15px; background-color: white;" ></div>
  <div class="container-fluid">
    <div class="row gy-3 my-3">
      <div class="col-sm-4 ">

        <div class="zoombox">

          <img
            src="istockphoto-1224021113-170667a.jpg"
            class="zoomboximg">
          <div class="bottom-left">RAJASTHAN</div>
          <div class="zoomboxDiv">

            <div class="text">
              <p style="text-align:center;">PADHARO MHARE DESH</p>
            </div>
            <div class="button">
              <a href="#" class="btn" style="color:black; background:white;">Read More</a>
            </div>
          </div>
          <!--div-->
        </div>
        <!--zoombox-->
      </div>
      <div class="col-sm-4">

        <div class="zoombox">

          <img
            src="./istockphoto-539018660-612x612.jpg"
            class="zoomboximg">
          <div class="bottom-left">MUMBAI</div>
          <div class="zoomboxDiv">

            <div class="text">
              <p style="text-align:center;">YATO DHARAM TATO JAYAH</p>
            </div>
            <div class="button">
              <a href="#" class="btn" style="color:black; background:white;">Read More</a>
            </div>
          </div>
          <!--div-->
        </div>
        <!--zoombox-->
      </div>
      <div class="col-sm-4">

        <div class="zoombox">

          <img
            src="./goa-where-to-stay.jpeg"
            class="zoomboximg">
          <div class="bottom-left">GOA</div>
          <div class="zoomboxDiv">

            <div class="text">
              <p style="text-align:center;">WHERE THE SEA MEETS THE SKY</p>
            </div>
            <div class="button">
              <a href="#" class="btn" style="color:black; background:white;">Read More</a>
            </div>
          </div>
          <!--div-->
        </div>
        <!--zoombox-->
      </div>
      <div class="col-sm-4">

        <div class="zoombox">

          <img
            src="photo-1602216056096-3b40cc0c9944.jpg"
            class="zoomboximg">
          <div class="bottom-left">KERALA</div>
          <div class="zoomboxDiv">

            <div class="text">
              <p style="text-align:center;">GOD'S OWN COUNTRY</p>
            </div>
            <div class="button">
              <a href="#" class="btn" style="color:black; background:white;">Read More</a>
            </div>
          </div>
          <!--div-->
        </div>
        <!--zoombox-->
      </div>
      <div class="col-sm-4">

        <div class="zoombox">

          <img
            src="./Chennai-High-Court.jpg"
            class="zoomboximg">
          <div class="bottom-left">CHENNAI</div>
          <div class="zoomboxDiv">

            <div class="text">
              <p style="text-align:center;">NATURAL WONDERS</p>
            </div>
            <div class="button">
              <a href="#" class="btn" style="color:black; background:white;">Read More</a>
            </div>
          </div>
          <!--div-->
        </div>
        <!--zoombox-->
      </div>
      <div class="col-sm-4">

        <div class="zoombox">

          <img
            src="./HYDERABAD.jpg"
            class="zoomboximg">
          <div class="bottom-left">HYDERABAD</div>
          <div class="zoomboxDiv">

            <div class="text">
              <p style="text-align:center;">THE CITY OF PEARLS</p>
            </div>
            <div class="button">
              <a href="#" class="btn" style="color:black; background:white;">Read More</a>
            </div>
          </div>
          <!--div-->
        </div>
        <!--zoombox-->
      </div>
      <div class="col-sm-4">

        <div class="zoombox">

          <img
            src="./Top-Things-to-Do-in-Jammu-and-Kashmir.jpg"
            class="zoomboximg">
          <div class="bottom-left">JAMMU & KASHMIR</div>
          <div class="zoomboxDiv">

            <div class="text">
              <p style="text-align:center;">A PARADISE ON EARTH</p>
            </div>
            <div class="button">
              <a href="#" class="btn" style="color:black; background:white;">Read More</a>
            </div>
          </div>
          <!--div-->
        </div>
        <!--zoombox-->
      </div>
      <div class="col-sm-4">

        <div class="zoombox">

          <img
            src="./Ladakh-is-often-referred-to-as-the-Little-Tibet.jpg"
            class="zoomboximg">
          <div class="bottom-left">LADAKH</div>
          <div class="zoomboxDiv">

            <div class="text">
              <p style="text-align:center;">TIRED FEET,HAPPY HEART</p>
            </div>
            <div class="button">
              <a href="#" class="btn" style="color:black; background:white;">Read More</a>
            </div>
          </div>
          <!--div-->
        </div>
        <!--zoombox-->
      </div>
      <div class="col-sm-4">

        <div class="zoombox">

          <img
            src="./Darjeeling-toy-train-route.jpg"
            class="zoomboximg">
          <div class="bottom-left">DARJELLING</div>
          <div class="zoomboxDiv">

            <div class="text">
              <p style="text-align:center;">TEA PRODUCERS IN THE WORLD</p>
            </div>
            <div class="button">
              <a href="#" class="btn" style="color:black; background:white;">Read More</a>
            </div>
          </div>
          <!--div-->
        </div>
        <!--zoombox-->
      </div>

    </div>
  </div>
  <div class="container-fluid" style="height:10px; background-color: white;"></div>
  <section>
    <div class="container" style="padding-top:15px;">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-xl-8 text-center">
        
        <H2 class="mb-4 pb-2 mb-md-5 pb-md-0 text-white" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
           WHAT SAY OUR CLIENTS
        </H2>
      </div>
    </div>
  
    <div class="row text-center">
      <div class="col-md-4 mb-5 mb-md-0">
        <div class="d-flex justify-content-center mb-4">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
            class="rounded-circle shadow-1-strong" width="150" height="150" />
        </div>
        <h5 class="mb-3 text-white">Maria Smantha</h5>
        <h6 class="text-primary mb-3">HR Consultancy</h6>
        <p class="px-xl-3 text-white">
          <i class="fas fa-quote-left pe-2"></i> I would like to thank you and Pickdesti for the excelent service provided. The reservation process was excellent and flexible.
        </p>
        <ul class="list-unstyled d-flex justify-content-center mb-0">
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star-half-alt fa-sm text-warning"></i>
          </li>
        </ul>
      </div>
      <div class="col-md-4 mb-5 mb-md-0">
        <div class="d-flex justify-content-center mb-4">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
            class="rounded-circle shadow-1-strong" width="150" height="150" />
        </div>
        <h5 class="mb-3 text-white">Lisa Cudrow</h5>
        <h6 class="text-primary mb-3">The Tribute Services</h6>
        <p class="px-xl-3 text-white">
          <i class="fas fa-quote-left pe-2"></i>The tour was exactly what we wanted and everything went smoothly without a single problem.
          The tour was wonderful from beginning to end and excellent value for money.
        <ul class="list-unstyled d-flex justify-content-center mb-0">
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
        </ul>
      </div>
      <div class="col-md-4 mb-5 mb-mb-0">
        <div class="d-flex justify-content-center mb-4">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
            class="rounded-circle shadow-1-strong" width="150" height="150" />
        </div>
        <h5 class="mb-3 text-white">John Smith</h5>
        <h6 class="text-primary mb-3">Marketing Specialist</h6>
        <p class="px-xl-3 text-white">
          <i class="fas fa-quote-left pe-2"></i> Both tours were really enjoyable. The guides on both were excellent; they were very informative and I learnt a lot. The transport for the mountains tour was fine and lunch was very nice.
        </p>
        <ul class="list-unstyled d-flex justify-content-center mb-0">
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="far fa-star fa-sm text-warning"></i>
          </li>
        </ul>
      </div>
    </div>
    </div>
  </section>
  <?php
  include 'footer.php';
  ?>
  <script>
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
</body>

</html>

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
  <style>
    /* Make the image fully responsive */


    .img-container-grid {
      display: flex;
      flex-wrap: wrap;
    
    }

    .smallsquare:hover .overlay {
      opacity: 1;
    }

    .v_rectangle:hover .overlay {
      opacity: 1;
    }

    .inner_square:hover .overlay {
      opacity: 1;
    }

    .h_rectangle:hover .overlay {
      opacity: 1;
    }

    .bigsquare:hover .overlay {
      opacity: 1;
    }

    .smallsquare {
      max-width: 20%;
      height: auto;
      flex: 0 0 20%;
      padding-top: 20%;
      display: grid;
      position: relative;
    }

    .h_rectangle {
      max-width: 40%;
      flex: 0 0 40%;
      padding-top: 20%;
      position: relative;
    }

    .bigsquare {
      max-width: 40%;
      height: auto;
      flex: 0 0 40%;
      padding-top: 40%;
      display: grid;
      position: relative;
    }

    .bigsquare_blank {
      max-width: 40%;
      height: auto;
      flex: 0 0 40%;
      display: flex;
      flex-wrap: wrap;
    }

    .inner_square {
      max-width: 50%;
      flex: 0 0 50%;
      height: 50%;
      position: relative;
    }

    .v_rectangle {
      max-width: 20%;
      flex: 0 0 20%;
      padding-top: 40%;
      position: relative;
    }

    .img-grid-c {
      opacity: 1;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      position: absolute;
      object-fit: cover;
      object-position: center;
      padding: 2.5px;
      display: block;

    }

    .overlay {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      height: 100%;
      width: 100%;
      opacity: 0;
      transition: .5s ease;
      background-color: transparent;
    }

    .text {
      color: white;
      font-size: 2vw;
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      text-align: center;
      font-family:cursive;
      font-weight: bold;
    }

    .marquee {
      width: 100vw;

      overflow: hidden;
    }

    .container {
      overflow: hidden;
    }

    .marquee-content {
      display: flex;
      list-style: none;
      animation: scrolling 20s linear infinite;
      height: 100%;

    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .marquee-item {
      flex-shrink: 0;
      margin: 2px;
      white-space: nowrap;
      width: 20vw;
      transition: 1s;
    }


    .marquee-item img {

      width: 100%;
      height: 100px;
      padding: 0%;
      flex-shrink: 0;

    }

    .marquee-item:hover {
      transform: scale(1.1);
      z-index: 2;
    }

    body {
      background-color:white;
    }


    @keyframes scrolling {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translatex(-1000px);
      }
    }

    .banner {
      /* The image used */
      background-image:url(./vecteezy_traveler-standing-at-stone-for-look-at-view-on-top-mountain_22055077_728.jpg);
      height: 600px;
      width:100%;
      background-size:cover;
      background-position: right center;
      background-attachment: fixed;
      /* filter: blur(4px);
  -webkit-filter: blur(4px); */
    
    }
    .bg-text{
      background-color: rgb(0,0,0); /* Fallback color */
     background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 40%;
  left: 50%;
  padding:1vw;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 40%;
 
  text-align: center;
    }
    .section{
      position: relative;
      width:100%;
      height:200px;
      overflow: hidden;
      display:flex;
      justify-content: center;
      align-items:center;
    }
    .section video{
      position:absolute;
      top:0;
      left:0;
      width:100%;
      height:200px;
      object-fit:cover;

    }
    .section h2{
      position:absolute;
      top:0;
      left:0;
      width:100%;
      height:200px;
      background:white;
      color:#495057;
      font-size:8vw;
      font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
      text-align:center;
      
      line-height: 200px;
      mix-blend-mode:screen;
    }
    
  </style>
</head>

<body>
<?php
  include 'navbar.php';
  ?>
  
  <div class="banner" ></div>
    <div class="bg-text">
      <h3 style="font-size:6vw; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;">GALLERY</h3>
       
    </div>
  
 
  <div class="section" >
    <video autoplay muted loop>
      <source src="India in 30 seconds.mp4" type="video/mp4">

    </video>
    <h2>Adventure in INDIA</h2>
  </div>  
  <div class="container ">
    <div class="marque" >
      <ul class="marquee-content">
        <li class="marquee-item">
          <img src="./istockphoto-1224021113-170667a.jpg" alt="">
        </li>

        <li class="marquee-item">
          <img src="./istockphoto-539018660-612x612.jpg" alt="">
        </li>

        <li class="marquee-item">
          <img src="./Ladakh-is-often-referred-to-as-the-Little-Tibet.jpg" alt="">
        </li>

        <li class="marquee-item">
          <img src="./A_typical_charminar_evening.jpg" alt="">
        </li>

        <li class="marquee-item">
          <img src="./vecteezy_day-trip-to-ko-phi-phi-in-thailand-southern-islands__885.jpg" alt="">
        </li>
        <li class="marquee-item">
          <img src="./Top-Things-to-Do-in-Jammu-and-Kashmir.jpg" alt="">
        </li>
        <li class="marquee-item">
          <img
            src="https://media.istockphoto.com/photos/view-of-sydney-harbour-australia-picture-id535455441?k=6&m=535455441&s=612x612&w=0&h=jVkW0bOqvffn2SzvUdncgkwHGScJRzak0oaQGij__h8="
            alt="">
        </li>
        <li class="marquee-item">
          <img src="./photo-1602216056096-3b40cc0c9944.jpg" alt="">
        </li>

        <li class="marquee-item">
          <img src="./vecteezy_young-tourist-couple-watching-spectacular-mountain-scenery_10621909_29.jpg" alt="">
        </li>
        <li class="marquee-item">
          <img src="./istockphoto-1224021113-170667a.jpg" alt="">
        </li>

        <li class="marquee-item">
          <img src="./istockphoto-539018660-612x612.jpg" alt="">
        </li>

        <li class="marquee-item">
          <img src="./Ladakh-is-often-referred-to-as-the-Little-Tibet.jpg" alt="">
        </li>

        <li class="marquee-item">
          <img src="./A_typical_charminar_evening.jpg" alt="">
        </li>

        <li class="marquee-item">
          <img src="./vecteezy_day-trip-to-ko-phi-phi-in-thailand-southern-islands__885.jpg" alt="">
        </li>
        <li class="marquee-item">
          <img src="./Top-Things-to-Do-in-Jammu-and-Kashmir.jpg" alt="">
        </li>
        <li class="marquee-item">
          <img
            src="https://media.istockphoto.com/photos/view-of-sydney-harbour-australia-picture-id535455441?k=6&m=535455441&s=612x612&w=0&h=jVkW0bOqvffn2SzvUdncgkwHGScJRzak0oaQGij__h8="
            alt="">
        </li>
        <li class="marquee-item">
          <img src="./photo-1602216056096-3b40cc0c9944.jpg" alt="">
        </li>

        <li class="marquee-item">
          <img src="./vecteezy_young-tourist-couple-watching-spectacular-mountain-scenery_10621909_29.jpg" alt="">
        </li>

     


      </ul>
      </div>
     </div>
  <div class="img-container-grid" style="padding-bottom:0%; background-color: black;">
    <div class="smallsquare"><img
        src="./women-1134987_1920.jpg" class="img-grid-c">
      <div class="overlay">
        <div class="text">HAPPY</div>
      </div>
    </div>
    <div class="smallsquare"><img
        src="./Beaches-Turks-Caicos-Family-Walk-Beach.jpg"
        class="img-grid-c">
      <div class="overlay">
        <div class="text">FUN</div>
      </div>
    </div>
    <div class="h_rectangle"><img
        src="./How-to-Explore-India-in-Different-Ways.jpg"
        class="img-grid-c">
      <div class="overlay">
        <div class="text">ADVENTURE</div>
      </div>
    </div>
    <div class="smallsquare"><img
        src="./indiatips1.jpeg"
        class="img-grid-c">
      <div class="overlay">
        <div class="text">SMILE</div>
      </div>
    </div>
    
  
  
    
    <div class="bigsquare"><img
        src="./vecteezy_hiker-woman-getting-help-on-hike-smiling-happy-overcoming-obstacle_3079068.jpg"
        class="img-grid-c">
      <div class="overlay">
        <div class="text">HIKING</div>
      </div>
    </div>
    <div class="bigsquare_blank">
      <div class="inner_square"><img src="./Intrepid-Travel-India_Jaipur_amber_fort_walk_leader_422.jpg" class="img-grid-c">
        <div class="overlay">
          <div class="text">TRAVEL</div>
        </div>
      </div>
      <div class="inner_square"><img
          src="./pexels-te-lensfix-1371360-1-scaled.jpg"
          class="img-grid-c">
        <div class="overlay">
          <div class="text">TRIP</div>
        </div>
      </div>
      <div class="inner_square"><img
          src="./lifestyle-jammu-kashmir.jpg"
          class="img-grid-c">
        <div class="overlay">
          <div class="text">BEAUTY</div>
        </div>
      </div>
      <div class="inner_square"><img src="./13896645072_c994520879_k.jpg" class="img-grid-c">
        <div class="overlay">
          <div class="text">CELEBRATION</div>
        </div>
      </div>
    </div>
    <div class="v_rectangle">
      <img
        src="./vecteezy_silhouette-of-a-cyclist_16852520_689.jpg"
        class="img-grid-c">
      <div class="overlay">
        <div class="text">CYCLING</div>
      </div>
    </div>
    <div class="smallsquare"><img
      src="./5c0a61d109ba6f3ecf5863b4_IMG_4387.jpg" class="img-grid-c">
    <div class="overlay">
      <div class="text">LOVE</div>
    </div>
  </div>
  <div class="smallsquare"><img
      src="./0-1000-pillars-temple_Moodbidri_Patti-Morrow_luggageadlipstick.com_104739.jpg"
      class="img-grid-c">
    <div class="overlay">
      <div class="text">WEST INDIA</div>
    </div>
  </div>
  <div class="h_rectangle"><img
      src="./best-places-to-visit-in-india-for-young-people.jpg"
      class="img-grid-c">
    <div class="overlay">
      <div class="text">NIGHT STAY</div>
    </div>
  </div>
  <div class="smallsquare"><img
      src="./Best-Places-to-Visit-in-India.jpg"
      class="img-grid-c">
    <div class="overlay">
      <div class="text">HOLIDAY</div>
    </div>
  </div>



  
  <div class="bigsquare"><img
      src="./vecteezy_paragliding-sport-view_11926475_449.jpg"
      class="img-grid-c">
    <div class="overlay">
      <div class="text">PARAGLIDING</div>
    </div>
  </div>
  <div class="bigsquare_blank">
    <div class="inner_square"><img src="./Cornwall-skydiving.jpg" class="img-grid-c">
      <div class="overlay">
        <div class="text">SKYDIVING</div>
      </div>
    </div>
    <div class="inner_square"><img
        src="./Zipline-in-Goa.jpg"
        class="img-grid-c">
      <div class="overlay">
        <div class="text">ZIPLINE</div>
      </div>
    </div>
    <div class="inner_square"><img
        src="./Camp-Aquaterra-Rishikesh-20.jpg"
        class="img-grid-c">
      <div class="overlay">
        <div class="text">RAFTING</div>
      </div>
    </div>
    <div class="inner_square"><img src="./trekking.jpg" class="img-grid-c">
      <div class="overlay">
        <div class="text">TREKKING</div>
      </div>
    </div>
  </div>
  <div class="v_rectangle">
    <img
      src="./istockphoto-517077916-612x612.jpg"
      class="img-grid-c">
    <div class="overlay">
      <div class="text">ENJOY</div>
    </div>
  </div>
  </div>
</div>
<?php
  include 'footer.php';
  ?>
</body>

</html>
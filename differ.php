<?php
 include("navbar.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
  .masthead {
    background-size: cover;
    min-height: 50vh;
    position: relative;
    color: rgb(156, 200, 238);
    text-shadow: 2px 2px 2px rgba(0, 0, 0, 2);

    background-attachment: fixed;
  }

  h1 {
    font-size: 4rem;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

  }

  .color-overlay {
    position: absolute;
    width: 100%;
    height: 100%;

  }


  /*south india */




  .main.txt1h {
    text-align: left;
    margin-top: 30px;
    font-weight: 600;
    text-shadow: 0px 1px 1px rgb(236, 157, 157);
  }

  .main.txt h1 sapn {
    color: rgb(223, 162, 119);
  }

  .packages.card {
    border-radius: 5px;
    border: none;
    box-shadow: rgba(0, 0, 0, 0, 1)0px 4px 12px;
  }

  .packages.card img {
    border-radius: 20px;

  }

  .packages.card .card-body {
    background-color: transparent;
  }

  .packages .card .card-body h3 {
    font-size: 25px;
    font-weight: 600;
  }

  .packages .card .card-body .p {
    font-size: 15px;
  }

  .checked {
    color: rgb(229, 149, 0);
  }

  .packages .card .card-body h6 {
    font-size: 20px;
  }

  .packages .card .card-body a {
    padding: 10px;
    text-decoration: none;
    background-color: rgb(126, 149, 235);
    color: rgb(43, 36, 36);
    border-radius: 5px;
  }



  /* review slider */
  /* .review .review-slider{
    padding-bottom: 2rem;
}

.review .box{
    padding: 2rem;
    text-align: center;
    box-shadow: 0 1rem 2rem black;
    border-radius: 3px;
     background-color: black;
}

.review .box img{
    height:15rem;
    width:14rem;
    border-radius:30%;
    object-fit: cover;
    margin-bottom: 1rem;
}

.review .box h6{
    color: black;
    font-size: 2.5rem;
}

.review .box p{
    display: flex;
    color: rgb(251, 218, 218);
    font-size: 1.5rem;
    padding: 1rem 0;
}

.review .box .stars i{
    color: var(orange);
    font-size: 1.7rem;
} */

  /* travel experct */

  .b1 {
    /* height:vh;
             width: 60vw; */
    /* border:2px solid rgb(184, 60, 60); */


  }

  .b2 {
    display: flex;
    /* height: 50vh;
             width: 60vw; */
    /* border: 2px solid rgb(209, 22, 22); */

    margin-left: -2rem;

  }

  .b3 {
    /* height: 40vh;
              width: 15vw; */
    /* border: 2px solid red;  */
    margin-left: 4rem;
  }

  .b4 img {
    height: 20vh;
    width: 10vw;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
    border-radius: 50%;
  }
</style>

<body>
  
  <div class="masthead" style="background-image: url('./sandeep-kr-yadav-EDPdkScQhDQ-unsplash.jpg')">
    <h1 style="text-align: center; padding-top: 50px; color: black;">WELCOME TO LADHAK</h1> <br>
    <h3
      style="text-align:center; color: rgb(43, 43, 92);font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 3rem; background-color: white;">
      LADAKH is
      All about shades of mountain!!
      Is about beauty of nature!!</h3>
  </div>
  <div class="mb-3 mt-4"></div>
  <h3
    style="text-align: center; color:rgb(240, 227, 227);font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 3rem; background-color: black;">
    PLACES TO VISIT IN LADHAK</h3>
  <!-- <div class="banner" style="background-image:url(./tsomoriri\ lake\ in\ ladakh\ go2ladakh.jpg); height: 100%; width: 20%;"></div> -->
  <section class="packages" id="packages" style="background-color: black;">
    <div class="container" style="background-color: black;">

      <div class="main-txt">
      </div>
    
      <div class="row" style="margin-top:30px">
      
          <div class="col-md-3 py-3 py-md-0">
            <div class="mb-3 mt-4"></div>
           <form action="manage_cart.php" METHOD="POST">
            <div class="card">
              <img src="./darshan-chudasama-v1oGBUnXVDs-unsplash.jpg">
              <div class="card-body">
                <h3>Leh to Leh</h3>
                <P>6-Days</P>

                <h6>price:<strong>3501</strong></h6><br>
                <button type="submit" NAME="Add_To_Cart" class="btn-btn-info">Book now</button>
                <input type="hidden" name="Place" value="Leh to Leh">
                <input type="hidden" name="Price" value="3500">
              </div>
            </div>
         </form>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <div class="mb-3 mt-4"></div>
           <form action="manage_cart.php" METHOD="POST">
            <div class="card">
              <img src="./darshan-chudasama-v1oGBUnXVDs-unsplash.jpg">
              <div class="card-body">
                <h3>Leh to Leh</h3>
                <P>6-Days</P>

                <h6>price:<strong>3501</strong></h6><br>
                <button type="submit" NAME="Add_To_Cart" class="btn-btn-info">Book now</button>
                <input type="hidden" name="Place" value="Leh to Lel">
                <input type="hidden" name="Price" value="3500">
              </div>
            </div>
         </form>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <div class="mb-3 mt-4"></div>
           <form action="manage_cart.php" METHOD="POST">
            <div class="card">
              <img src="./darshan-chudasama-v1oGBUnXVDs-unsplash.jpg">
              <div class="card-body">
                <h3>Leh to Leh</h3>
                <P>6-Days</P>

                <h6>price:<strong>3501</strong></h6><br>
                <button type="submit" NAME="Add_To_Cart" class="btn-btn-info">Book now</button>
                <input type="hidden" name="Place" value="Leh to Lhhh">
                <input type="hidden" name="Price" value="3500">
              </div>
            </div>
         </form>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <div class="mb-3 mt-4"></div>
           <form action="manage_cart.php" METHOD="POST">
            <div class="card">
              <img src="./darshan-chudasama-v1oGBUnXVDs-unsplash.jpg">
              <div class="card-body">
                <h3>Leh to Leh</h3>
                <P>6-Days</P>

                <h6>price:<strong>3501</strong></h6><br>
                <button type="submit" NAME="Add_To_Cart" class="btn-btn-info">Book now</button>
                <input type="hidden" name="Place" value="Leh to Leh">
                <input type="hidden" name="Price" value="3500">
              </div>
            </div>
         </form>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <div class="mb-3 mt-4"></div>
           <form action="manage_cart.php" METHOD="POST">
            <div class="card">
              <img src="./darshan-chudasama-v1oGBUnXVDs-unsplash.jpg">
              <div class="card-body">
                <h3>Leh to Leh</h3>
                <P>6-Days</P>

                <h6>price:<strong>3501</strong></h6><br>
                <button type="submit" NAME="Add_To_Cart" class="btn-btn-info">Book now</button>
                <input type="hidden" name="Place" value="Leh to Leh">
                <input type="hidden" name="Price" value="3500">
              </div>
            </div>
         </form>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <div class="mb-3 mt-4"></div>
           <form action="manage_cart.php" METHOD="POST">
            <div class="card">
              <img src="./darshan-chudasama-v1oGBUnXVDs-unsplash.jpg">
              <div class="card-body">
                <h3>Leh to Leh</h3>
                <P>6-Days</P>

                <h6>price:<strong>3501</strong></h6><br>
                <button type="submit" NAME="Add_To_Cart" class="btn-btn-info">Book now</button>
                <input type="hidden" name="Place" value="Leh to Leh">
                <input type="hidden" name="Price" value="3500">
              </div>
            </div>
         </form>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <div class="mb-3 mt-4"></div>
           <form action="manage_cart.php" METHOD="POST">
            <div class="card">
              <img src="./darshan-chudasama-v1oGBUnXVDs-unsplash.jpg">
              <div class="card-body">
                <h3>Leh to Leh</h3>
                <P>6-Days</P>

                <h6>price:<strong>3501</strong></h6><br>
                <button type="submit" NAME="Add_To_Cart" class="btn-btn-info">Book now</button>
                <input type="hidden" name="Place" value="Leh to Lg">
                <input type="hidden" name="Price" value="3588">
              </div>
            </div>
         </form>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <div class="mb-3 mt-4"></div>
           <form action="manage_cart.php" METHOD="POST">
            <div class="card">
              <img src="./darshan-chudasama-v1oGBUnXVDs-unsplash.jpg">
              <div class="card-body">
                <h3>Leh to Leh</h3>
                <P>6-Days</P>

                <h6>price:<strong>3501</strong></h6><br>
                <button type="submit" NAME="Add_To_Cart" class="btn-btn-info">Book now</button>
                <input type="hidden" name="Place" value="Leh to keh">
                <input type="hidden" name="Price" value="3500">
              </div>
            </div>
         </form>
          </div>
          <div class="mb-3 mt-4"></div>
  </section>
  <div class="d-flex" style="height:auto;">
    <div class="row" style="height:auto; width:100%; background-color: rgb(23, 21, 21);margin: 0%;">
      <div class="col-md-5" style="background-color: rgb(0, 0, 0)">
        <img src="./darshan-chudasama-ilrO9BN7QSE-unsplash.jpg" style="padding-top: 5px; height: 500px; width: 100%;">
      </div>
      <div class="col-sm-7" style="height:auto;">

        <h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-align: center; color:pink ;">
          Ladakh is the land of high passes. Keeping your feet on the ground is not an option.</h1>
        <h4
          style="text-align: center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; padding-top: 10%; color: bisque;">
          Tourism is one of an economic contributor to the union territory of Ladakh in Northern India. The union
          territory is sandwiched between the Karakoram mountain range to the north and the Himalayas to the south
          and is situated at the height of 11,400 ft. Ladakh is composed of the Leh and Kargil districts. The
          region contains prominent Buddhist sites and has an ecotourism industry.</h4>
      </div>
    </div>
  </div>
  
  <div class="mt-3 mb-4"></div>
  <h1 style="text-align: center; color: white; background-color: black;">THE TRAVEL EXPERT</h1>
  <div class="mt-3 mb-4"></div>
  <section>
    <div class="container-fluid" style="padding-top:15px; background-color: black; color: white;">
      <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-xl-8 text-center">

          <H2 class="mb-4 pb-2 mb-md-5 pb-md-0 text-white"
            style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
            OUR BEST GUIDERS
          </H2>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-md-3 mb-5 mb-md-0">
          <div class="d-flex justify-content-center mb-4">
            <img src="./photo-1438761681033-6461ffad8d80.jpg" class="rounded-circle shadow-1-strong" width="150"
              height="150" />
          </div>
          <h5 class="mb-3 text-white">LISA</h5>
          <h6 class="text-primary mb-3">Travel agent</h6>

          <ul class="list-unstyled d-flex justify-content-center mb-0">
            <li>
              <i class="fab fa-twitter"></i>
            </li>
            <li>
              <i class="fab fa-facebook "></i>
            </li>
            <li>
              <i class="fab fa-instagram "></i>
            </li>

          </ul>
        </div>
        <div class="col-md-3 mb-5 mb-md-0">
          <div class="d-flex justify-content-center mb-4">
            <img src="./man-449406__340.jpg" class="rounded-circle shadow-1-strong" width="150" height="150" />
          </div>
          <h5 class="mb-3 text-white">JOHN</h5>
          <h6 class="text-primary mb-3">Team leader</h6>

          <ul class="list-unstyled d-flex justify-content-center mb-0">
            <li>
              <i class="fab fa-twitter"></i>
            </li>
            <li>
              <i class="fab fa-facebook "></i>
            </li>
            <li>
              <i class="fab fa-instagram "></i>
            </li>

          </ul>
        </div>
        <div class="col-md-3 mb-5 mb-md-0">
          <div class="d-flex justify-content-center mb-4">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp" class="rounded-circle shadow-1-strong"
              width="150" height="150" />
          </div>
          <h5 class="mb-3 text-white">SMITH</h5>
          <h6 class="text-primary mb-3">Team leader</h6>

          <ul class="list-unstyled d-flex justify-content-center mb-0">
            <li>
              <i class="fab fa-twitter"></i>
            </li>
            <li>
              <i class="fab fa-facebook "></i>
            </li>
            <li>
              <i class="fab fa-instagram "></i>
            </li>

          </ul>
        </div>
        <div class="col-md-3 mb-5 mb-mb-0">
          <div class="d-flex justify-content-center mb-4">
            <img src="./matheus-ferrero-pg_WCHWSdT8-unsplash.jpg" class="rounded-circle shadow-1-strong" width="150"
              height="150" />
          </div>
          <h5 class="mb-3 text-white">MARIA</h5>
          <h6 class="text-primary mb-3">Travel assistant</h6>

          <ul class="list-unstyled d-flex justify-content-center mb-0">
            <li>
              <i class="fab fa-twitter"></i>
            </li>
            <li>
              <i class="fab fa-facebook "></i>
            </li>
            <li>
              <i class="fab fa-instagram "></i>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </section>
  <?php
  include 'footer.php';
  ?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-4">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha344-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha344-MrcW6ZMFYlzcLA4Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>


<style>
  * {
    margin: 0;
    padding: 0;
  }

  .parallaxone {
    background-image: url(./darshan-chudasama-ilrO9BN7QSE-unsplash.jpg);
    
    height: 600px;
    /* width:100%; */
    background-size: 100% 100%;
    background-attachment: fixed;

  }

  /* .parallaxone h1 {
    text-align: center;
    background-color: white;
    color: black;
    position: relative;
    top: 300px;
  } */

  .parallaxone h2 {
    background-color: rgb(245, 200, 200);
    color: rgb(0, 0, 0);
    text-align: center;
    position: relative;
    height: 80px;
    width: 1300px;
    left: 300px;
    font-size: 4rem;
    top: 460px;
  }

  .parallaxone p {
    position: relative;
    background-color: rgb(255, 212, 212);
    color: rgb(0, 0, 0);
    top: 450px;
    padding: 50px;

  }

  /* .parallaxone .container-fluid{
    position: relative;
    top: 450px;
  } */
  .row {
    position: relative;
    top: 300px;

  }

  .row .col-sm-4 .form-box {
    width: 500px;
    margin-left: 10px;
  }

  .row .col-sm-4 h1 {

    font-family: 'Times New Roman', Times, serif;
    position: relative;
    top: 1px;
  }

  .row .col-sm-4 input[type=text] {

    border: none;
    border-bottom: 2px solid rgb(112, 106, 106);
  }

  .row .col-sm-4 input[type=password] {

    border: none;
    border-bottom: 2px solid rgb(112, 106, 106);
  }

  .row .col-sm-4 input[type=e-mail] {

    border: none;
    border-bottom: 2px solid rgb(112, 106, 106);
  }

  .row .col-sm-4 input[type=date] {

    border: none;
    border-bottom: 2px solid rgb(112, 106, 106);
  }

  .container2 {
    display: flex;
    width: 100%;
    padding: 4% 1%;
    box-sizing: border-box;
    height: 85vh;
  }

  .box {
    flex: 1;
    overflow: hidden;
    transition: .5s;
    margin: 0 1%;
    /* box-shadow: 0 20px 30px rgba(0,0,0,.1); */
    line-height: 0;
  }

  .box>img {
    width: 200%;
    height: calc(100% - 15vh);
    object-fit: cover;
    transition: .5s;
  }



  .box:hover {
    flex: 1 1 50%;
  }

  .box:hover>img {
    width: 100%;
    height: 85%;
  }

  /* description */
  .main-section {
    /* width: 600px; */
    border-radius: 10px;
    margin-top: 1cm;
    padding: 0px 30px 60px;
    box-shadow: 0 8px 14px rgba(4, 4, 4, 4, 1);

  }

  input,
  section {
    clear: both;
    display: none;
    padding-top: 10px;
  }

  label {
    background-color: rgb(68, 60, 60);
    cursor: pointer;
    font-size: 20px;
    display: block;
    float: left;
    padding: 10px 40px 10px;
    border-top: 2px double white;
    border-left: 1px solid white;
    border-right: 1px solid white;
    border-bottom: 1px solid white;
    color: rgb(196, 183, 183);

  }

  #home-tab:checked~#home-content,
  #itineary-tab:checked~#itineary-content,
  #location-tab:checked~#location-content,
  #review-tab:checked~#review-content {
    display: block;
  }

  input:checked+label {
    font-weight: bold;
    border-top-color: black;
    border-right-color: black;
    border-left-color: black;
    border-bottom-color: black;
  }


  h3 {
    margin-bottom: lrem;

  }

/* review */





.st2{
             /* height:vh;
             width: 60vw; */
             /* border:2px solid rgb(184, 60, 60); */
             

        }
         .st3{
             display: flex;
             /* height: 50vh;
             width: 60vw; */
             /* border: 2px solid rgb(209, 22, 22); */

            margin-left: -2rem;
              
         }
         .st4{
             /* height: 40vh;
              width: 15vw; */
              /* border: 2px solid red;  */
              margin-left: 4rem;
         }
         .st4 img{
             height:  20vh;
             width: 10vw;
            display:block;
            margin-left: auto;
            margin-right:auto;
            margin-top: 10px;
            border-radius: 50%;
         }

         .st4 h2{
          color: aliceblue;
         }
         .st4 p{
          color: aliceblue;
         }
  /* background video */
</style>

<body>
  <div class="parallaxone">
    <!-- <h1>WELCOME TO LADAKH</h1> -->
    <h2>CLOSE TO HEAVEN DOWN TO EARTH</h2>
    <p>Ladakh ("land of high passes") is a Union Territory in northern India. It is located between the Kunlun mountain
      range in the north and the main Himalayas to the south. Ladakh is well-known for its remote mountain scenery. It
      is inhabited by a mix of Indo-Aryan and Tibetan people.[7] Their language is an archaic dialect of the Tibetan
      language. It is sometimes called "Little Tibet", because it has been strongly influenced by Tibetan culture.
      Ladakh is one of the least populated regions in the area.

      Historically, the region of Ladakh included neighbouring Baltistan, the Indus and Zanskar Valleys, Lahaul and
      Spiti, Aksai Chin and the Nubra Valley. The modern region borders Tibet to the east, Lahaul and Spiti to the
      south, and Kashmir, Jammu and Baltistan to the west.

      In the past, Ladakh was important for trade. It was where several important trade routes met.[4] However, China
      closed the border with Tibet in the 1960s, and since then, international trade has suffered. Tourism is an
      exception, and it has been very important for Ladakh's economy since about 1974. Because the wider region is a
      part of the Kashmir conflict, the Indian military has a strong presence in Ladakh.

      The largest town in Ladakh is Leh. Ladakh's most population are followers of Shia Islam and rest majority is
      Buddhists which are 35%of population.[9] Leh is followed by Kargil as the second largest town in Ladakh.[10] Some
      Ladakhi activists have in recent times called for Ladakh to be made into a union territory because of its
      religious and cultural differences with Kashmir, which is mostly Muslim

    </p>
  </div>
  <!-- <div class="container-fluid" style="background-color: black;"> -->
  <div class="row" style="height: 650px;width: 100% 100%; background-color: rgb(0, 0, 0);">
    <div class="col-sm-4">
      <div class="form-box">
        <form action="">

          <div class="mb-2 mt-3"></div>
          <h1 style="text-align: center;">BOOK YOUR TRIP</h1>
          <div class="mb-3 mt-4"></div>
          <input type="text" class="form-control" placeholder="First name" required><br>
          <input type="text" class="form-control" placeholder="Last name" required><br>
          <input type="e-mail" class="form-control" placeholder="E-mail" required><br>
          <input type="password" class="form-control" placeholder="password" required><br>
          <input type="text" class="form-control" placeholder="Where to" required><br>
          <input type="text" class="form-control" placeholder="How many" required><br>
          <input type="date" class="form-control" placeholder="Arrivals" required><br>
          <input type="date" class="form-control" placeholder="Leaving" required><br>
          <input type="button" class="form-control" value="Book Now">
        </form>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="container2">
        <div class="box">
          <img src="./darshan-chudasama-ilrO9BN7QSE-unsplash.jpg">

        </div>
        <div class="box">
          <img src="./sandeep-kr-yadav-EDPdkScQhDQ-unsplash.jpg">

        </div>
        <div class="box">
          <img src="./darshan-chudasama-v1oGBUnXVDs-unsplash.jpg">

        </div>
        <div class="box">
          <img src="./sandeep-kr-yadav-EDPdkScQhDQ-unsplash.jpg">

        </div>
      </div>
    </div>
  </div>
  <div class="mt-3 mb-4"></div>
  <div class="row" style="height: 500px; width: 1900px;width: 100% 100%; margin-left:0;">
    <div class="col-5" style="background-color: rgb(0, 0, 0); background-image: url(./nubra-3.jpg);">
    </div>
    <div class="col-7" style="background-color: rgb(0, 0, 0);">
      <div class="main-section" style="height: 100%; width: 100% ">
        <input id="home-tab" type="radio" name="tabs" checked>
        <label for="home-tab">DESCRIPTION</label>
        <input id="itineary-tab" type="radio" name="tabs">
        <label for="itineary-tab">ITINEARY</label>
        <input id="location-tab" type="radio" name="tabs">
        <label for="location-tab">POLICIES</label>
        <input id="review-tab" type="radio" name="tabs">
        <label for="review-tab">REVIEW</label>
        <h3 style="color: white; font-weight: 4px;">
          _______________________________________________________________________________________</h3>

        <section id="home-content">
          <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: azure; font-size: 1rem;">Get
            ready to make your dream of going on a road trip in Ladakh come true where one would be experiencing the
            fusion of thrill, serene beauty and culture of The "Land of High Passes", as the entire tour is exclusively
            elected by Thrillophilia's outdoor experts. A wonderful drive through Leh-Ladakh, a land covered with
            snow-capped mountains and the highest motorable passes, makes you feel at the top of the world. The unique
            thing about the Ladakh terrain is that it has mountains, forests, deserts, lakes, rivers, waterfalls in one
            beautiful and dynamic geography.
          </p>

          <h6 style="font-size: large; text-decoration: underline; font-weight: bold; color: azure;">INCLUSION</h6>
          <ul>
            <li style="color:white">Comfortable Vehicle (Innova/ Xylo/ Tavera/ Scorpio/ Similar) for sightseeing on all
              days as per the itinerary.</li>
            <li style="color:white">Airport pick up & drop as per your flight timings</li>
            <li style="color:white">Accommodation at all locations on double (for couples & special requests) and triple
              sharing basis in standard hotels/camps</li>
            <li style="color:white">Buffet Breakfast and Dinner: Starting with Dinner on Day 1 & ending with Breakfast
              on Last Day as per itinerary</li>
            <li style="color:white">Fuel for the whole trip as per the itinerary</li>
            <li style="color:white">Assured Inner line permits and Ladakh Union fee</li>
            <li style="color:white">Experienced driver for the entire journey</li>
            <li style="color:white">Oxygen cylinder and Basic First-Aid during the tour</li>
            <li style="color:white">Driver expenses/ toll tax/ Fuel/ Parking charges</li>


          </ul>

        </section>
        <section id="itineary-content">
          <h4 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: azure;">DAY-1
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: azure;font-weight: 100;">-Arrival in Leh | Welcome to the Top of
              the World</span></h4>
          <br>
          <h4 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: azure;">DAY-2
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: azure;font-weight: 100;">-Leh to Sham Valley | Exploring Borders
              of Leh</span></h4>
          <br>


          <h4 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: azure;">DAY-3
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: azure;font-weight: 100;">-Leh to Khardung-la | A Drive to the
              World’s Highest Motorable Road (18000 ft.)</span></h4>
          <br>

          <h4 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: azure;">DAY-4
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: azure;font-weight: 100;">-Leh to Pangong Lake | Recreate the
              Famous Bollywood Moments
            </span></h4><br>

          <h4 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: azure;">DAY-5
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: azure;font-weight: 100;">-Departure | It's Time to Say Goodbye
              to the Mountains
            </span></h4><br>



        </section>
        <section id="location-content">
          <h3 style="color:white;text-decoration: underline;">Thrilling Leh Ladakh Tour with Pangong Lake Policies</h3>
          <br>
          <h4 style="color:white">Confirmation policy</h4>
          <p style="color:white">
            As soon as you pay, you will receive a confirmation email from Thrillophilia.

            The remaining amount needs to be paid before the date of travel.
          </p>
          <h4 style="color:white">Refund policy</h4>
          <p style="color:white">
            The applicable refund amount will be processed within 10 business days.

            All applicable refunds will be done in the traveler's Pick desti wallet as Thrillcash.
          </p>
          <h4 style="color:white">Cancellatin policy</h4>
          <ul>
            <li style="color:white">If cancellation are made 30 days before the date of travel then 25.0% of total tour
              cost will be charged as cancellation fees</li>
            <li style="color:white">If cancellation are made 15 days to 30 days before the date of travel then 50.0% of
              total tour cost will be charged as cancellation fees</li>
            <li style="color:white">If cancellation are made 0 days to 15 days before the date of travel then 100.0% of
              total tour cost will be charged as cancellation fees</li>
          </ul>
          <h4 style="color:white">Payment terms policy</h4>
          <ui>
            <li style="color:white">100.0% of total tour cost will have to be paid 30 days before the date of travel
            </li>
          </ui>

        </section>
        <section id="review-content">
          <div class="st2">
            <div class="st3">
                <div class="st4">
                    <img src="./portrait-of-cheerful-european-man-with-stubble-dressed-in-hoodie-and-black-jacket-looks-directly-at-camera-has-happy-face-expression-poses-against-pink-background-people-emotions-lifestyle-free-photo.jpg" alt="">
                    <h2 style="text-align: center;">SAM</h2>
                    <p style="text-align: center;">It's an excellent tour organised by PICK DESTI. Excellent planning and hotel selections are very good. We have enjoyed more than our expectations.
                    </p>
                </div>
                <div class="st4">
                    <img src="./photo-1438761681033-6461ffad8d80.jpg" alt="">
                    <h2 style="text-align: center;">JESSICA</h2>
                    <p style="text-align: center;">Everything was so perfect. Arrangements was excellent, I am gonna recommend Thrillophillia to my family and other friends as well.</p>
                </div>
                <div class="st4">
                    <img src="./im2.avif" alt="">
                    <h2 style="text-align: center;">HENNA</h2>
                    <p style="text-align: center;">Best experience ever. We had the best accommodation, food and transportation. We had an amazing guide throughout the tour and he was very informative and well versed. We were 5 people on this tour</p>
                </div>
            </div>
           </div> 
        </section>
      </div>
   
    </div>   


</body>

</html>
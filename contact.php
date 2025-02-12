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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<style>
  .flex-row{
    background: url('Jaisalmer Tourism, India_ Places, Best Time & Travel Guides 2023.png') no-repeat;
    background-size: cover !important;
    background-position: center !important;
    display: flex;
    align-items: center;
    justify-content: center;

  opacity: 0.7;
  }
  .flex-row h3{
font-size: 5rem;
text-transform: uppercase;
color: rgb(253, 253, 253);
/* color: antiquewhite; */
text-shadow: var(--text-shadow);
  }
.container .bi {
  padding: 1rem;
  font-size: 1.5rem;
  width: 4rem;
  text-align: center;
  text-decoration: none;
  /* margin: 5rem 2rem; */
  border-radius: 50%;
  background: #000000;
  color: rgb(255, 255, 255);
    }
    .gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #4d1a2b, #060305);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #4c132b, #000000);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
</style>
<body>
<?php
  include 'navbar.php';
  ?>
    <div class="flex-row bg-dark" style="height:40vh; width :100%; ">
      <!-- <img src="Don_t Let Your Teaching Career Become Your Entire Identity(1).jfif" class="w-100 h-100"> -->
         <h3 style="text-align: center;" class="d-flex">CONTACT US </h3> 
    </div>
    <div class="container">
        <div class="row gy-3 my-3">
        <div class="col-sm-4 col-md-4 mb-5 px-4 h-100">
            <div class="bg-white rounded shadow p-4 pop">
                <div class="d-flex align-items-center mb-2 ">      
                        <i class="bi bi-geo-alt-fill "></i>                
                        <h3 class="p-3"><b>Address</b></h3>
                </div>
                <div>
                    <p>31 park street, 5th Avenue, Dhanmondy</p>
                </div>
            </div>
        </div>
      
              <div class="col-sm-4 col-md-4 mb-5 px-4 align-items-center h-100">
                <div class="bg-white rounded shadow p-4 pop">
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-telephone-fill" ></i>
                        <h3 class="p-3"><b>Phone</b></h3>
                </div>
                <div class="text-center">
                    <p>+91 7892549799 &nbsp;
                    +91 7355849648</p>
                </div>
            </div>
        </div>
                  <div class="col-sm-4 col-md-4 mb-5 px-4 h-100">
                    <div class="bg-white rounded shadow p-4 pop">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-fill"></i>
                            <h3 class="p-3"><b>Email</b></h3>
                </div>
                <div class="text-center">
                    <p>216942anamika@gmail.com </p>
                   
                </div>
            </div>
        </div>
    </div>
    
  <!-- Section: Design Block -->
    <!-- <div class="container bg-dark p-5">
        <div class="row gy-3 my-3">
            <div class="col-sm-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 pop">
                    <div class="d-flex align-items-center mb-2">
                        <button class="btn btn-dark">
    
                            <i class="bi bi-geo-alt-fill " width="60rem"></i>
                        </button>
                        <h5 class="m-0 ms-3">location</h5>
                    </div>
                    <div class="box">
                        <p>gji ejrejr nrwrwq fnekfek erkwj newkne wnjergnw rtg gieeng enteg</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 mb-5 px-4">
                <form action="">
                    <div class="mb-3 mt-3">
                      <label for="">First Name:</label>
                      <input style="margin-left:2cm;" type="text" placeholder="Enter first name" name="name">
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="">Last Name:</label>
                      <input style="margin-left:2cm;" type="text" placeholder="Enter last name" name="name">
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="">Email:</label>
                      <input style="margin-left:3cm;" type="email" placeholder="Enter email" name="email">
                    </div>
                 
                    <div class="mb-3 mt-3">
                      <label for="">Mobile:</label>
                      <input style="margin-left: 2.5cm;" type="number" placeholder="Enter mobile no" name="num">
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="">Address:</label>
                      <input style="margin-left: 2.3cm;" type="textarea" placeholder="Enter address" name="address">
                    </div>
                    <div class="mb-3 mt-3">
                      <button type="submit" class="btn btn-dark">Submit</button>
                      <button style="margin-left: 2cm;" type="reset" class="btn btn-dark">Reset</button>
                    </div>
            
                  </form>
            </div>
        </div>
    </div> -->
    <section class="h-100 gradient-form" style="background-color: #eee;">
      <div class="container py-5 h-100">
        <!-- <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card rounded-3 text-black"> -->
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">
    
                    <div class="text-center">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                        style="width: 185px;" alt="logo">
                      <h4 class="mt-1 mb-5 pb-1">We are PickDesti Team</h4>
                    </div>
    
                    <form class="needs-validation">
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example11">Username</label>
                        <input type="text" id="form2Example11" class="form-control"
                          placeholder="john" required/>                  
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example11">Email</label>
                        <input type="email" id="form2Example11" class="form-control"
                          placeholder="john@gmail.com" required/>                  
                      </div>
    
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example22">Phone</label>
                        <input type="number" id="form2Example22" class="form-control" required/>                      
                      </div>
                      <div class="form-outline mb-4">
                        <label for="floatingTextarea2">Comments</label>
                         <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                          style="height: 100px"></textarea>                      
                      </div>
    
                      <div class="text-center pt-1 mb-5 pb-1">
                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Send</button>                     
                      </div>
                    </form>
    
                  </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                  <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h4 class="mb-4">We are more than just a company</h4>
                    <p class="small mb-0">PICK DESTI is a tourist guide website for those traveling to India. Our primary goal is to provide a guide
                      and relevant information that will assist tourists planning to visit India. We also provide information on
                      the
                      lesser-known areas that will make a great vacation spot for those traveling to India</p>
                  </div>
                </div>
              </div>
            </div>
          <!-- </div>
        </div>
      </div> -->
    </section>
</body>
</html>
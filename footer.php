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
<style>
  .footer{
    background-color: black;
}
    .footer .box-container{
      display: grid;
      grid-template-columns: repeat(auto-fit,minmax(8rem, 1fr));
      gap: 2rem;
      /* padding-left: 90px; */
  }
  .footer .box-container .box h3{
   color: whitesmoke;
       font-size: 1.5rem;
       padding-bottom: 1rem;
       padding-left: 45px;
  }
  .footer .box-container .box a{
      color: white;
          font-size: 1rem;
          padding-left: 45px;
          padding-right: .1rem;
          padding-bottom: 1rem;
          display: block;
          transition: .2s linear;
     }
     .footer .box-container .box a:hover{
          padding-right: 2rem;
     }
     .footer .col-md-6{
             color: white;
             height: 50px;
     }
     .footer a:hover{
      opacity: 0.7;
     }
    
     .footer .col-md-6 h3{
      padding-left: 45px;
      font-size: 1.5rem;
      padding-bottom: 1rem;
     }
  
     .footer .bi {
   
      transition: .2s linear;
      font-size: 30px;
      width: 50px;
      color: white;
      margin: 5px 10px;
      border-radius:50%;
      padding-left: 30px;
    }
    .footer .bi:hover {
      opacity: 0.7;
  }
  </style>
<body>
  <!-- header -->



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
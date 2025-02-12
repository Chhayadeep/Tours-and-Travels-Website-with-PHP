<?php
 include("navbar.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row" style="height:50px">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center my-5">
                <h1 class="fw-bold mb-0 text-black ">Booking Cart</h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial no</th>
                            <th scope="col">Place</th>
                            <th scope="col">Price</th>
                            <th scope="col">No of Tickets</th>
                            <th scope="col">Total</th>
                            <th scope="col">Clear</th>

                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                       
                        if(isset($_SESSION['cart']))
                        {

                        
                        foreach($_SESSION['cart'] as $key=>$value)
                        {  
                            $sr=$key+1;
                          
                            echo"
                            <tr>
                                <td>$sr</td>
                                <td>$value[Place]</td>
                                <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                <td>
                                     <form action='manage_cart.php' method='POST'>
                                    <input  class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                                    <input type='hidden' name='Place' value='$value[Place]'>
                                    </form>
                                </td>
                                <td class='itotal'></td>
                                <td>
                                    <form action='manage_cart.php' method='POST'>
                                    <button name='remove_item' class='btn btn-sm btn-outline-danger'>Remove</button>
                                    <input type='hidden' name='Place' value='$value[Place]'>
                                    </form>
                                </td>
                                  
                            </tr>
                            ";
                        }
                    }
                        ?>

                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="border  rounded p-4" style="background-color:lightblue">
                    <h4>Grand Total:-</h4>
                    <h4 style="text-align:end" id="gtotal"></h4>
                    <?php
               if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
               {

               
                ?>
                    <form action="purchase.php" method="POST">
                        <div class="col-md-12 mb-3">
                            <div class="form-floating">
                                <input type="name" class="form-control" placeholder="John Mark" name="fullname"
                                    required>
                                <label class="col-form-label">Name</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-floating">
                                <input type="number" maxlength="10" min="0" max="9999999999" class="form-control"
                                    placeholder="+91 98 8788 9974" name="phone_no" required>
                                <label class="col-form-label">Phone No.</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-floating">
                                <input type="email" class="form-control" placeholder="name@example.com" name="bookmail"
                                    required>
                                <label class="col-form-label">Email</label>
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="form-floating">
                                <input type="date" class="form-control" placeholder="dd-mm-yy" name="bookcheckin"
                                    required>
                                <label class="col-sm col-form-label">Check-In</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-floating">
                                <input type="date" class="form-control" placeholder="dd-mm-yy" name="bookcheckout"
                                    required>
                                <label class="col-sm col-form-label">Check-Out</label>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" name="bookmessage"
                                    style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Comments</label>
                            </div>
                        </div>
                        <BR>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pay_mode" value="COD"
                                id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                CASH ON THE SPOT
                            </label>
                        </div>
                        <div class="col-auto mt-4">
                            <button type="submit" name="purchase" class="btn btn-primary" value="book">Book Now</button>
                        </div>

                    </form>
                    <?php 
                }
                ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        var gt = 0;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');
        function subtotal() {
            gt = 0;
            for (i = 0; i < iprice.length; i++) {

                itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
                gt = gt + (iprice[i].value) * (iquantity[i].value);
            }
            gtotal.innerText = gt;
        }
        subtotal();
    </script>
</body>

</html>
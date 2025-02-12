<?php
session_start();
$conn=mysqli_connect("localhost","root","","testing");
if(!$conn)
{
    die("not connected");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {
      $query1="INSERT INTO `order_manager`( `Full_Name`, `Phone_No`, `Email_id`, `Check_IN`, `Check_Out`, `comments`, `Pay_Mode`) 
      VALUES ('$_POST[fullname]','$_POST[phone_no]','$_POST[bookmail]','$_POST[bookcheckin]',
      '$_POST[bookcheckout]','$_POST[bookmessage]','$_POST[pay_mode]')";
      if( mysqli_query($conn,$query1))
      {
        $Order_Id=mysqli_insert_id($conn);
        $query2="INSERT INTO `user_orders`(`Order_Id`, `Place`, `Price`, `Quantity`) VALUES (?,?,?,?)";
       $stmt= mysqli_prepare($conn,$query2);
       if($stmt)
       {
         mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Place,$Price,$Quantity);
         foreach($_SESSION['cart']as $key=>$values)
         {
            $Place=$values['Place'];
            $Price=$values['Price'];
            $Quantity=$values['Quantity'];
            mysqli_stmt_execute($stmt);
         }
         unset($_SESSION['cart']);
         echo"<script>
        alert('Booking Done');
        window.location.href='differ.php';
        </script>";
       }
       else
       {
        echo"<script>
        alert('SQL Query Prepare error');
        window.location.href='mycart.php';
        </script>";
       }
      }
      else
      {
        echo"<script>
        alert('SQL error');
        window.location.href='mycart.php';
        </script>";
      }
    }
}
?>
<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_To_Cart']))
    {
        if(isset($_SESSION['cart']))
        {
        $myitem=array_column($_SESSION['cart'],'Place');
        if(in_array($_POST['Place'],$myitem))
        {
            echo"<script>
            alert('item already added');
            window.location.href='differ.php';
            </script>";
        }
        else 
        {
         $count=count($_SESSION['cart']);
         $_SESSION['cart'][$count]=array('Place'=>$_POST['Place'],'Price'=>$_POST['Price'],'Quantity'=>1);
         echo"<script>
           alert('item added');
            window.location.href='differ.php';
            </script>";
        }
    }
       else
       {
        $_SESSION['cart'][0]=array('Place'=>$_POST['Place'],'Price'=>$_POST['Price'],'Quantity'=>1);
        echo"<script>alert('item added');
            window.location.href='differ.php';
            </script>";
       }
     
   }
   
  if(isset($_POST['remove_item']))
  {
    foreach($_SESSION['cart'] as $key=> $value)
    {
        if($value['Place']==$_POST['Place'])
        {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart']=array_values($_SESSION['cart']);
        echo"<script>
            alert('item removed');
            window.location.href='mycart.php';
        </script>";
        }
    }
  }
  if(isset($_POST['Mod_Quantity']))
  {
    foreach($_SESSION['cart'] as $key=> $value)
    {
        if($value['Place']==$_POST['Place'])
        {
       $_SESSION['cart'][$key]['Quantity']=$_POST['Mod_Quantity'];
       
        echo"<script>
            window.location.href='mycart.php';
        </script>";
        }
    }
  }
}
?>
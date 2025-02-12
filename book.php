<!-- 
//  if($_SERVER["REQUEST_METHOD"]=="POST"){
//   include 'C:\wamp\www\new\connect.php';
//   if(isset($_POST('book'))){
//     $bname=$_POST['bookname'];
//     $bname=filter_var($bname, FILTER_SANITIZE_STRING);
// $bphone=$_POST['bookphone'];
// $bphone=filter_var($bphone, FILTER_SANITIZE_STRING);
// $bmail=$_POST['bookmail'];
// $bmail=filter_var($bmail, FILTER_SANITIZE_STRING);
// $bwhere=$_POST['bookwhere'];
// $bwhere=filter_var($bwhere, FILTER_SANITIZE_STRING);
// $bticket=$_POST['bookticket'];
// $bticket=filter_var($bticket, FILTER_SANITIZE_STRING);
// $bcheckin=$_POST['bookcheckin'];
// $bcheckin=filter_var($bcheckin, FILTER_SANITIZE_STRING);
// $bcheckout=$_POST['bookcheckout'];
// $bcheckout=filter_var($bcheckout, FILTER_SANITIZE_STRING);
// $bcomments=$_POST['bookmessage'];
// $bcomments=filter_var($bcomments, FILTER_SANITIZE_STRING);
//   }
// } -->

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
  <title>Book</title>
  </head>
<body>
    <div class="message d-flex p-4 bg-success">
        <div class=" container">
          <div class="row gy-3 gx-3">
            <div class="col-md-6 bg-primary rounded">
              <!-- <div class="travelcheck"> -->
              <div class="d-flex bg-black">
                <div class="container">
                  <div class="row p-4">
                    <div class="col-md-12 bg-secondary shadow p-4 rounded ">
                      <h5 class="text-wrap mb-3">Find Your Destination</h5>
                      <form class="row gx-3 gy-2  align-items-end needs-validation" action="book.php" method="post">
                        <div class="col-md-12 mb-3">
                          <div class="form-floating">
                            <input type="name" class="form-control" placeholder="John Mark" name="bookname" required >
                            <label class="col-form-label">Name</label>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-floating">
                            <input type="number" maxlength="10" min="0" max="9999999999" class="form-control" placeholder="+91 98 8788 9974" name="bookphone" required>
                            <label class="col-form-label">Phone No.</label>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-floating">
                            <input type="email" class="form-control" placeholder="name@example.com" name="bookmail" required>
                            <label class="col-form-label">Email</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <div class="form-floating">
                            <input type="text" class="form-control" placeholder="Gujraat" name="bookwhere" required>
                            <label class="col-form-label">Where To</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <div class="form-floating">
                            <input type="number" class="form-control" placeholder="1" name="bookticket" required>
                            <label class="col-form-label">Tickets</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <div class="form-floating">
                            <input type="date" class="form-control" placeholder="dd-mm-yy" name="bookcheckin" required>
                            <label class="col-sm col-form-label">Check-In</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <div class="form-floating">
                            <input type="date" class="form-control" placeholder="dd-mm-yy"  name="bookcheckout" required>
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
    
                        <div class="col-auto">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                              Remember me
                            </label>
                          </div>
                        </div>
                        <div class="col-auto mt-4">
                          <button type="submit" name="book" class="btn btn-primary" value="book">Book</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- </div> -->
            </div>
            <div class="col-md-6 bg-secondary">
    
            </div>
          </div>
        </div>
      </div>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST' AND $_REQUEST['book']=='book'){
echo"welcome";
echo "<table>
  <tr>
  <th>NAME</th>
  <th>EMAIL</th>
  <th>PHONE</th>
  <th>PLACE</th>
  <th>CHECK_IN</th>
  <th>CHECK_OUT</th>
  <th>TICKET</th>
  <th>COMMENTS</th>";
 

echo "<tr><td>",$_POST["bookname"],"</td><td>",
 $_POST["bookphone"],"</td><td>",
 $_POST["bookmail"],"</td><td>",
 $_POST["bookticket"],"</td><td>",
 $_POST["bookcheckin"],"</td><td>",
 $_POST["bookcheckout"],"</td></tr>";

echo"</table>";
}
?>
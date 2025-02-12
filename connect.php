<?php 
$conn=mysqli_connect("localhost","root","","travel");
// if(!$conn)
// {
//     die("not connected");
// }
// echo "connected succ";
// $sql_query="CREATE DATABASE travel";
// mysqli_query($conn,$sql_query);
// if(!mysqli_select_db($conn,'travel'))
// {
//     echo "not selected";
// }
//login
// $sql_query="create table login(email varchar(30),password varchar(20))";
// mysqli_query($conn,$sql_query);
// echo "table created successfully";
// $logmail=$_POST['loginemail'];
// $logpsd=$_POST['loginpsd'];

// // insertion
// $sql_query="insert into login(email,password)values('$logmail','$logpsd')";
// if(!mysqli_query($conn,$sql_query))
// {
//     echo "not inserted";
// }
// else{
//     echo "successfully";
// }

//register
// $sql_query="create table register(Firstname varchar(20),Lastname varchar(20),Email varchar(20),Password varchar(70))";
// mysqli_query($conn,$sql_query);
// echo "table created successfully";
// $firstname=$_POST['regname'];
// $lastname=$_POST['reglname'];
// $remail=$_POST['regmail'];
// $rpsd=$_POST['regpsd'];

// // // insertion
// $sql_query="insert into register(Firstname,Lastname,Email,Password)values('$firstname','$lastname','$remail','$rpsd')";
// if(!mysqli_query($conn,$sql_query))
// {
//     echo "not inserted";
// }
// else{
//     echo "successfully";
// }




//search
// $sql_query="create table trip(tour_when date,tour_where varchar(20),tour_duration int)";
// mysqli_query($conn,$sql_query);
// echo "table created successfully";
// $when=$_POST["twhen"];
// $where=$_POST["twhere"];
// $duration=$_POST["tduration"];
// // insertion
// $sql_query="insert into trip(tour_when,tour_where,tour_duration)values('$when','$where','$duration')";
// if(!mysqli_query($conn,$sql_query))
// {
//     echo "not inserted";
// }
// else{
//     echo "successfully";
// }

//book
// $sql_query="create table book(Name varchar(20),Phone_No int(15),Email varchar(20),Check_In date,Check_Out date,Comments varchar(7000))";
// mysqli_query($conn,$sql_query);
// echo "table created successfully";
// $bname=$_POST['bookname'];
// $bphone=$_POST['bookphone'];
// $bmail=$_POST['bookmail'];
// $bcheckin=$_POST['bookcheckin'];
// $bcheckout=$_POST['bookcheckout'];
// $bcomments=$_POST['bookmessage'];
// // insertion
// $sql_query="insert into book(Name,Phone_No,Email,Check_In ,Check_Out ,Comments)values('$bname','$bphone','$bmail','$bcheckin','$bcheckout','$bcomments')";
// if(!mysqli_query($conn,$sql_query))
// {
//     echo "not inserted";
// }
// else{
//     echo "successfully";
// }

// $sql_query="select * from register where email='$logmail' AND password='$logpsd'";
// $query_result=mysqli_query($conn,$sql_query);
// $count =mysqli_num_rows($query_result);
// if($count>0){
//   echo "<table>
//   <tr>
//   <th>NAME</th>
//   <th>EMAIL</th>
//   <th>PHONE</th>
//   <th>PLACE</th>
//   <th>CHECK_IN</th>
//   <th>CHECK_OUT</th>
//   <th>TICKET</th>
//   <th>COMMENTS</th>";
//   WHILE($record=mysqli_fetch_array($query_result))
//   {
//     echo"<tr><td>",$record["Name"],"</td><td>",
//     $record["Email"],"</td><td>",
//     $record["Phone_No"],"</td><td>",
//     $record["Check_In"],"</td><td>",
//     $record["Check_Out"],"</td><td>",
//     $record["Comments"],"</td></tr>";

//   }
//   echo"</table>";
// }
?>






<!-- // @include 'connect.php';
// if(isset($_POST['submit']))
// {
//   $fname=mysqli_real_escape_string($conn,$_POST('regname'));
//   $lname=mysqli_real_escape_string($conn,$_POST('reglname'));
//   $mail=mysqli_real_escape_string($conn,$_POST('regmail'));
//   $pass=md5($_POST('regpsd'));
//   $cpass=md5($_POST('regcpsd'));
//   $select="Select * from register where email='$mail'&& password='$pass' ";
//   $result=mysqli_query($conn,$select);
//   if(mysqli_num_rows($result)>0)
// {
//   $error[]='user already exists!';
// }  
// else
// {
//   if($pass != $cpass){
//     $error[]='password not matched!';
//   }
//   else{
//     $insert="insert into register(Firstname,Lastname,Email,Password)values('$fname','$lname','$mail','$pass')";
//     mysqli_query($conn,$insert);
//   }
// }
// }; -->


<?php
 
 include 'connection.php';
   
 session_start();
 
 $user_id=$_SESSION['uuid'];
 $user_name=$_SESSION['unames'];
 $user_email=$_SESSION['uemail'];
 $user_country=$_SESSION['ucountry'];
 $user_city=$_SESSION['ucity'];
 $user_username=$_SESSION['uusername'];

 $sel=$conn->query("SELECT * FROM users where username='$user_username'");
 while($rows=mysqli_fetch_array($sel)){
   $us=$rows['username'];
 }

  if ($user_username=='') {
  echo "<script>window.location.replace('signout.php')</script>";
  }

 ?>
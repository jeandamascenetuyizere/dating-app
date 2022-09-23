<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik&display=swap">
      <link rel="stylesheet" href="./font/fontawesome-free-5.15.4-desktop/fontawesome-free-6.1.2-web/css/all.css">
      <link rel="stylesheet" href="css/style2.css">

    <title>Welcome to Dating site</title>
  </head>
  <body>
    <header >
      <nav class="nav" style="  background: #feefe3;">
        <div class="logo-container">
          <h1 style="font-size:30px;">Dating <span style="color: #ed9b59;">App</span></h1>
        </div>
        <ul class="list-items">
          <li class="list">
            <a href="about.php" class="link">About us</a>
          </li>
          <li class="list">
            <a href="contact.php" class="link">Contact us</a>
          </li>
        
          <div class="btn-container">
            <ul>
            <li class="list">
              <a href="login.php" class="btn btn-secondary">Login</a>
            </li> &nbsp &nbsp
            <li class="list">
              <a href="signup.php" class="btn btn-secondary">Register</a>
            </li>
          </div>
        </ul>
      </nav>
      <div class="container">
        <div>
          <!-- <img src="image/ht.png" style="width: 100%;position:absolute;"> -->
        </div>
        <div class="container-left">
          <p class="text-small">Because you deserve better!</p>
          <h1 class="title">
            Get noticed for <span class="title-s">who</span> you are,
            <span class="title-s">not what</span> you look like.
          </h1>
          <p class="text">
            You’re more than just a photo. You have stories to tell, and
            passions to share, and even dates.
          </p>
          <div class="input-container">
            <img src="image/mail.png" class="input-icon" />
            <input placeholder="Enter your email" />
            <a href="login.php"><button class="btn">Get Started</button></a>
          </div>
          <div class="stats-container">
            <div class="stats">
              <h1 class="stats-title">150</h1>
              <p class="stats-text">Dates and matches made everyday</p>
            </div>

            <div class="stats">
              <h1 class="stats-title stats-title-brown">1,456</h1>
              <p class="stats-text">New members signup every day</p>
            </div>

            <div class="stats">
              <h1 class="stats-title">1M+</h1>
              <p class="stats-text">Members from around the world</p>
            </div>
          </div>
          <img src="image/wave-left.png" class="wave-left" />
        </div>

        <div class="container-right">
          <img
            class="couples-img couples-img-desktop"
            src="image/couples.png">
           
        </div>
      </div>
    </header>
  </body>
  <script src="index.js"></script>
</html>
<?php 
$conn=mysqli_connect('localhost','root','','dating');
if (!$conn) die('error in your database');
if (isset ($_POST['create'])) {
$name=$_POST['names'];
$email=$_POST['email'];
$country=$_POST['country'];
$city=$_POST['city'];
$username=$_POST['username'];
$password=$_POST['password'];


$connect=mysqli_query ($conn,"INSERT INTO `users` (`uid`, `names`, `email`, `country`, `city`, `username`, `password`) VALUES (NULL, '$name', '$email', '$country', '$city', '$username', '$password')");
if ($connect) {
 echo 'row inserted successful';
}
else{
    echo 'row did not inserted';
}
  
}

?>

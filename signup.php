<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up form</title>
    <link rel="stylesheet" href="./CSS/style.css">
   
</head>
<body>
    <div class="container">
        <div class="header">
            <nav>
                <h1 style="color: rgb(10, 8, 8) ;">Dating<span style="color: #ed9b59;;">App</span></h1>
              <ul>
                <li><a href="about.html">About </a></li>
                <li> <a href="contact.html">Contact</a></li> 
                <li> <a  href="login.html">Login</a></li>  
            </ul>
             </nav>
        
        </div>
   <div style="width: 100%; padding-top:12cm"> 
   <form class="navsignup" action="signup.php" method="POST">
        <h1>Sign up here</h1>
        <input type="text" placeholder=" Enter full names" name="names" required>
        <input type="text"  placeholder=" Enter Email" name="email" required>
        <input type="text"  placeholder=" Enter Country" name="country">
        <input type="text"  placeholder=" Enter City" name="city">
        <input type="text"  placeholder=" Enter username" name="username" required>
        <input type="password"  placeholder="Enter Password" name="password" required>
        <input type="submit" value="Create" name="create">
    </form>
</div>
</body>
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
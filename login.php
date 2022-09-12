<?php 


$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "dating";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}


//error_reporting(0);


if (isset($_POST['btn'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		header("Location: home.php");
	} else {
		echo "<script>alert('Woops! username or Password is Wrong.')</script>";
	}
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="./font/fontawesome-free-5.15.4-desktop/fontawesome-free-6.1.2-web/css/all.css">
    <link rel="stylesheet" href="./CSS/style.css">
   
</head>
<body>
    <div class="container">
        <div class="header">
            <nav>
                <h1 style="color: rgb(10, 8, 8) ;">Dating<span style="color: #ed9b59;">App</span></h1>
              <ul>
                <li><a href="">Home </a></li>
                <li> <a href="contact.html">Contact</a></li> 
            </ul>
             </nav>
        
        </div>
    <form class="box" action="" method="POST">
        <h1>Login here</h1>
        <input type="text" name="username" placeholder=" Enter username" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <input type="submit" name="btn" value="Login">
    </form>

</body>
</html>

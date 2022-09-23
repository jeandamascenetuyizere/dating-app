<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="./font/fontawesome-free-5.15.4-desktop/fontawesome-free-6.1.2-web/css/all.css">
    <link rel="stylesheet" href="css/style2.css">
   
</head>
<body>
    <div class="container">
        <div class="header">
            <nav style="background:#feefe3;margin-left:-22vh;">
                <h1 style="color: rgb(10, 8, 8);margin-left:20px ;">Dating<span style="color: #ed9b59;">App</span></h1>
              <ul >
                <li ><a href="index.php">Home </a></li>
                <li> <a href="contact.php">Contact</a></li> 
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
<?php 
//error_reporting(0);
include 'connection.php';

if (isset($_POST['btn'])) {
    
    session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
        
        session_regenerate_id();
		$row = mysqli_fetch_assoc($result);

        $_SESSION['uuid']=$row['uid'] ;
        $_SESSION['unames']=$row['names'] ;
        $_SESSION['uemail']=$row['email'] ;
        $_SESSION['ucountry']=$row['country'] ;
        $_SESSION['ucity']=$row['city'] ;
        $_SESSION['uusername']=$row['username'] ;
        session_write_close();
		header("Location: home.php");
	} else {
        echo "<script type='text/javascript'>alert('Woops! username or Password is Wrong. '); window.Location='login.php'</script>";
       
    
	}
    exit();
}

?>


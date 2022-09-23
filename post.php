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


if (isset($_POST['submit']))
 {
  
	$content = $_POST['content'];

	$sql = "INSERT INTO data ( content) VALUES ('$content')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('your post $ is successfly posted.');window.location='home.php';</script>";

     
    } 
    else{
        echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
    }
}
?>

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


?>
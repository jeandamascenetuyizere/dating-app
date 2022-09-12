<?php<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="product">
   <h1> product name: <input type="text"></h1>
   <h1> unit price: <input type="text"></h1>
   <h1> category <input type="select"></h1>
    </div>
>
    $servername ="localhost";
    $username = "root";
    $password ="";
    $dbname ="stock";
 $conn=mysqli-connect($servername);
/* $username,$password,$dbname*/
$sql="insert into product(name,marketing,price) values('rice','t20',40000')";

?>
</body>
</html>



<!-- update and comany registration not working -->



<?php
include 'conn.php'; 

$id = $_GET['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$quantity = $_POST['quantity'];
$message = $_POST['message'];
$price = $_POST['price'];
$q = " UPDATE products set  id='$id',name='$name',supplier_email='$email',description='$message',quantity= '$quantity', price='$price' where id='$id' " ;

 mysqli_query($con,$q);

 header('location:viewall.php');







?>
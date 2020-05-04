<?php

$res;
session_start();


$con=mysqli_connect('localhost','root');
if($con){

	echo"connection successful";
}else{
	echo"no connection";
}
mysqli_select_db($con,'backend');

$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$email = $_POST['email'];
$description = $_POST['message'];
 
$q=" insert into products(name,supplier_email,description,quantity,price) values('$name','$email','$description','$quantity','$price')" ;
$q1="insert into charts(email) values('$email')" ;
$q2=" select nop from charts where email='$email'  ";
mysqli_query($con,$q2) or die(mysqli_error) ;
$q3 = " update charts set nop= nop + '$quantity' where email='$email' ";
mysqli_query($con,$q3) ; 
mysqli_query($con,$q) ; 
mysqli_query($con,$q1) ;   
header('location:add.html');














?>
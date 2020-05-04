
<!-- working fine -->
<?php
session_start();


$con=mysqli_connect('localhost','root');
if($con){

	echo"connection successful";
}else{
	echo"no connection";
}
mysqli_select_db($con,'backend');

$name  =  $_POST['name'];
$pass = $_POST['password'];
$email = $_POST['email'];
$adress = $_POST['adress'];
$phoneno = $_POST['phone_no'];

$q="select * from login where email='$email' && password='$pass'";
$result= mysqli_query($con,$q);
$num= mysqli_num_rows($result);

if($num==1){
	echo "email or password already exists";
	header('location:signup.html');
	
}
else{
      $q1= " insert into login(name,email,password,adress,phoneno) values('$name','$email','$pass','$adress','$phoneno')";
       mysqli_query($con,$q1);
       header('location:main.html');
}



?>
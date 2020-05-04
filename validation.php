
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


$pass = $_POST['password'];
$email = $_POST['email'];


$q="select * from login where email='$email' && password='$pass'";
$result= mysqli_query($con,$q);
$num= mysqli_num_rows($result);

if($num==1){
	
	$email=$_POST['email'];
	$q1= " insert into company(email) VALUES('$email')" ;
	mysqli_query($con,$q1);

   header('location:index.php?connection_successful');
	
}
else{
      header('location:custlogin.html');
      echo "email/password doesnt exits";
}



?>
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
	if(isset($_POST['submit']))
	{
		$email=$_POST['email'];
		$q1="INSERT INTO suppliers(email) VALUES ('$email')" ;
		mysqli_query($con,$q1);
	    header('location:add.html');
	}
}
else{
      echo"fail";
      header('location:supplierlogin.html');
}



?>
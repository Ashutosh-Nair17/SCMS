
<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	<div class ="wrap">
	<h2> Sign up here </h2>
	<form action="signup.php" method="POST">
		<input type="text" name="name" placeholder="Name.." required>
			<input type="text" name="email" placeholder="Email.." required>
				<input type="password" name="password" placeholder="Password.." required>
					<input type="text" name="adress" placeholder="Address.." required>
						<input type="number" name="phone_no" placeholder="Phone No." required>
							<input type="submit" value="Submit ">
	</form> 
	</div>

<?php

if(isset($_POST["submit"])){
 if(!empty($_POST['email']) && !empty($_POST['password'])){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $pass = $_POST['password'];
 $adress = $_POST['adress'];
 $phoneno = $_POST['phoneno'];
 $conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); // DB Connection
 $db = mysqli_select_db($conn, 'backend') or die("DB Error"); // Select DB from database
 //Selecting Database
 $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
 $numrows = mysqli_num_rows($query);
 if($numrows == 0)
 {
 //Insert to Mysqli Query
 $sql = "INSERT INTO users(name,email,password,adress,phoneno) VALUES('$name','$email','$pass','$adress','$phoneno')";
 $result = mysqli_query($conn, $sql);
 //Result Message
 if($result){
 echo "Your Account Created Successfully";
 }
 else
 {
 echo "Failure!";
 
 }

 ?>
 </body>
</html>

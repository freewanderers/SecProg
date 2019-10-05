<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Validation</title>
</head>
<body>
	
<?php
	$username = $_POST['Username']; 
	$password = $_POST['Password'];
	$email = $_POST['Email'];
	$cpassword = $_POST['cPassword'];

	function check($username, $password, $email, $cpassword){
		if(preg_match('/^[a-z0-9]+$/', $username) == 0){
			echo "Input valid username(lower case only)!";
			return -1;
		}else if(preg_match('/^[a-z0-9A-Z]+[.{1}][a-z0-9A-Z]+[@{1}][a-zA-Z]+[.]+[a-z]+$/', $email) == 0){
			echo"Please re-enter valid email address";
			return -1;
		}else if(preg_match('/^[a-zA-Z0-9]$/', $password) != 0){
			echo "Only alphanumeric format is accepted";
			return -1;
		}else if(strcmp($password, $cpassword)!== 0){
			echo "Password not match!";
			return -1;
		}else{
			return 0;
		}
	}
	
	if(check($username, $password, $email, $cpassword) == 0){
		echo "Welcome, ".$username;
		echo "<br>";
		echo "Your ID is " .sha1($username);
		echo "<br>";
	}
	?>

<form action="../index.php" method="post">
	<br> <br> <br>
	<button type="submit">Back</button>
</form>
</body>
</html>
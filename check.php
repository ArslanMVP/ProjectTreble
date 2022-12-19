<?php
	$name = filter_var(trim( $_POST['username']), FILTER_SANITIZE_STRING);
	$email = filter_var(trim( $_POST['email']), FILTER_SANITIZE_STRING);
	$pass = $_POST['pass'];
	$password = stripslashes($pass);
    $password = htmlspecialchars($pass);
	echo $name;
	echo $email;
	echo $pass;
	$conn = mysqli_connect ("localhost","root","","users");
	mysqli_query($conn, "INSERT INTO `loginsandpasses` (`username`,`password`,`email`) VALUES('$name','$pass','$email')");
	 mysqli_close($conn);
	 header("Location: loggin.html"); exit();
?>
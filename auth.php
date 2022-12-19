<?php
$login = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$conn = mysqli_connect ("localhost","root","","users");
$result = $conn->query("SELECT * FROM `loginsandpasses` WHERE `username` = '$login' AND `password` = '$pass'");
$user = $result->fetch_assoc();
try {
	if(count($user) == 0){
	exit();
}
else if(count($user) == 1){
	echo "Username or password is incorrect";
	exit();
}
} catch (Exception $e) {
	header('Location: test.html');
}

$conn->close();
header('Location: Final%20Front%20end/Untitled-1.html');

?>
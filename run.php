<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$amount = $_POST['amount'];
	$name = $_POST['name'];
	$reason = $_POST['reason'];
	$servername = "localhost";
	$username = "root";
	$password = "smitpatel1996";
	$conn = mysqli_connect($servername, $username, $password);
	if (!$conn) {
   		die("Connection failed: " . mysqli_connect_error());
	}
	mysqli_select_db($conn,"finaldb");
	$bool = "INSERT INTO firsttable VALUES ('L','{$_SERVER['REMOTE_ADDR']}','{$amount}','{$name}','{$reason}',CURDATE());";
	mysqli_query($conn, $bool);
	mysqli_close($conn);
	header('Location: http://172.16.81.56/PalWallet.html#success');
	die();
}
?> 
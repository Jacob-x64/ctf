<h2><i>You shall not pass! Or maybe you will, idc.</i></h2>
<h3>Objective: bypass the login form</h3>
<!-- everything above this is not part of the challenge -->
<?php
		
if (!isset($_POST['submit'])){
	echo "<form action='index.php' method='post'>";
	echo "<table><tr><td>Username:</td><td><input type='text' name='username'></td></tr>";
	echo "<tr><td>Password:</td><td><input type='password' name='password'></td></tr>";
	echo "<tr><td><input type='submit' name='submit' value='Submit'></td></tr></table>";
	echo "</form>";
	exit;
}

$servername = "localhost";
$username = "";
$password = "";
$database = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$username = $_POST['username'];
$password = $_POST['password'];

if (preg_match('/(1.*=.*1)/',$username) || preg_match('/(1.*=.*1)/',$password)){
	echo "NO HACKING!<br><a href='index.php'>Back</a>";
	exit;	
}

$sql = "select * from <table_name> where username='$username' and password='$password'";

$result = $conn->query($sql);

if($result->num_rows > 0){
	echo "<h3>Logged in!</h3>";
	echo "FLAG: <REDACTED>";
	echo "<br><a href='index.php'>Back</a>";
}
else {
	echo "</h3>wrong password!</h3>";
	echo "<br><a href='index.php'>Back</a>";
}
?>

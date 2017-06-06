<?php

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
function validate_email($email){
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		return false;
	}	
	else {
		return true;
	}
}

function validate_input($input){
	if (preg_match("/[\'^£$%&*()}{@#~?><>,|=_+¬-]/',",$email)){
		return false;
	}
	else {
		return true;
	}
}

$username = $_POST['username'];
$email = $_POST['email'];

if (!validate_input($username)){
	echo "NO HACKING!<br><a href='index.php?forgot=1'>Back</a> | <a href='index.php'>Home</a>";
	exit;
}

$sql = "select * from <TABLE_NAME> where username='$username' and email like '$email'";

$result = $conn->query($sql);

if($result->num_rows > 0){
        echo "<h3>A password reset link has been sent to the email we have on file</h3>";
	
	if ($email == 'coolboy8293@supertest.com'){
		echo "FLAG: <REDACTED>";
	}
	
        echo "<br><a href='index.php?forgot=1'>Back</a> | <a href='index.php'>Home</a>";
}
else {
        echo "</h3>Sorry, we don't have that username and email combination in our system.</h3>";
        echo "<br><a href='index.php?forgot=1'>Back</a> | <a href='index.php'>Home</a>";
}

?>

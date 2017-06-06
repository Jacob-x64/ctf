<h2><i>A different kind of bakery</i></h2>
<h3>Objective: gain access to the administrative menu</h3>
<!-- everything above this is not part of the challenge -->
<?php
echo "<form action='index.php' method='post'><input type='submit' name='submit' value='Enter'></form>";

if (!isset($_POST['submit'])){
	$visitor = time();
	$admin = 0;
	$cookie = "visitor=".$visitor."|admin=".$admin;	
	setcookie("session", base64_encode($cookie));
}
else {
	$cookie_arr = explode("|",base64_decode($_COOKIE['session']));
	
	$admin = $cookie_arr[1];
	$visitor = $cookie_arr[0];
	
	if ($admin === "admin=1"){
	       echo "<h1>Welcome Admin!</h1>";
 	       echo "FLAG: <REDACTED>"
	}
	else {
	        echo "Thanks for visiting!";
	}

	echo "<br><a href='index.php'>Back</a>";
}
?>

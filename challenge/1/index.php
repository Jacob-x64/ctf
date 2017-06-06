<h2><i>Warm cookies are the best</i></h2>
<h3>Objective: gain access to the administrative menu</h3>
<!-- everything above this is not part of the challenge -->
<?php
setcookie("visitor", time());
setcookie("admin",0);

if (isset($_COOKIE['admin'])){
	if ($_COOKIE['admin'] == 1){
		echo "<h1>Welcome Admin!</h1>";
		echo "FLAG: <REDACTED>";
		echo "<br><a href='index.php'>Back</a>";
	}
	else {
		echo "Thanks for visiting!";
	}
}
else {
	echo "Thanks for visiting!";
}
?>

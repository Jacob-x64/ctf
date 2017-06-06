<h2><i>Refer a friend for a special bonus!</i></h2>
<h3>Objective: gain access to the administrative menu</h3>
<!-- everything above this is not part of the challenge -->
<?php
if (!isset($_POST['submit'])){
	echo "<form action='index.php' method='post'><input type='submit' name='submit' value='Enter'></form>";
	exit;
}

$ref = $_SERVER['HTTP_REFERER'];

if (preg_match('/(helpdesk)|(HELPDESK)/',$ref)){
	echo "<h1>Welcome Admin!</h1>";
        echo "FLAG: <REDACTED>";
	echo "<br><a href='index.php'>Back</a>";
}
else {
	echo "Sorry, only administrators from helpdesk can view this page.";
	echo "<br><a href='index.php'>Back</a>";

}
?>

<h1>Welcome to the circus!</h1>
<h3><font color='red'>A</font>
<font color='green'>d</font>
<font color='blue'>m</font>
<font color='orange'>i</font>
<font color='aqua'>n</font>
<font color='darkorchid'>i</font>
<font color='fuchsia'>s</font>
<font color='green'>t</font>
<font color='blue'>r</font>
<font color='orange'>a</font>
<font color='aqua'>t</font>
<font color='darkorchid'>i</font>
<font color='fuchsia'>v</font>
<font color='red'>e&nbsp;</font>
<font color='green'>C</font>
<font color='blue'>l</font>
<font color='orange'>o</font>
<font color='aqua'>w</font>
<font color='darkorchid'>n&nbsp;</font>
<font color='fuchsia'>L</font>
<font color='red'>o</font>
<font color='green'>g</font>
<font color='blue'>i</font>
<font color='orange'>n</font></h3>

<!-- everything above this is not part of the challenge -->


<!-- TODO: Bob needs to hurry up and finish his part of the code: index.php.txt -->
<?php
if (!isset($_POST['submit'])){
	echo "<form action='index.php' method='post'>
	<table><tr><td>Username:</td><td><input type='text' name='user'></td></tr>
	<tr><td>Password:</td><td><input type='password' name='password'></td></tr>
	<tr><td></td><td align='right'><input type='submit' name='submit' value='Submit'></td></tr>
	</table>
	</form>";
	exit();
}
 
if (md5($_POST['user']) == 1 && md5($_POST['password']) == 1){
	// looks like the hash functions didn't error out so we can proceed...
	doLogin();
}
else {
	echo '<h3><font color="red">Invalid login!</font></h3>Only clowns allowed!<br><img src="clown.PNG"><br><br><a href="index.php">Back</a>';
}

function doLogin(){
	// code that bob is supposed 2 do cuz i don't know n e thing bout databases
	echo "FLAG: <REDACTED>";
}
?>

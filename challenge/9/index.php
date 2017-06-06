<h2><i>Hello, my name is *</i></h2>
<h3>Objective: determine the email address associated with the account '<font color='green'>admin</font>'</h3>
<!-- everything above this is not part of the challenge -->
<?php

if ($_GET['forgot'] == 1){
	echo "<font color='red'>Password Reset</font><br>";
	echo "<b>Enter the username and email associated with your account and we'll send you an email with a link to reset your password:</b>";
        echo "<form action='forgot.php' method='post'>";
        echo "<table><tr><td>Username:</td><td><input type='text' name='username'></td></tr>";
        echo "<tr><td>Email:</td><td><input type='text' name='email'></td></tr>";
        echo "<tr><td><input type='submit' name='submit' value='Submit'></td><td></td></tr></table>";
        echo "</form>";
       
	echo "<a href='index.php'>Home</a>";
	exit;
}
else {
	echo "<form action='index.php' method='post'>";
	echo "<form action='index.php' method='post'>";
        echo "<table><itr><td>Username:</td><td><input type='text' name='username'></td></tr>";
        echo "<tr><td>Password:</td><td><input type='password' name='password'></td></tr>";
        echo "<tr><td><input type='submit' name='submit' value='Submit'></td><td></td></tr></table>";
	echo "<tr><td><a href='index.php?forgot=1'>Forgot Password</a></td><td></td></tr>";
        echo "</form>";
	
	exit;
}


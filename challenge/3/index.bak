<h2><i>No hablo base64</i></h2>
<h3>Objective: gain access to the administrative menu</h3>
<!-- everything above this is not part of the challenge -->
<?php
echo "<!-- Backup: index.bak -->";

echo "<form action='index.php' method='post'><input type='submit' name='submit' value='Enter'></form>";

$default = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
$custom  = "ZYXWVUTSRQPONMLKJIHGFEDCBAzyxwvutsrqponmlkjihgfedcba9876543210+/";

if (!isset($_POST['submit'])){
        $visitor = time();
        $admin = 0;
        $cookie = "admin=".$admin;
        setcookie("session", strtr(base64_encode($cookie),$default,$custom));
}
else {
        $cookie_arr = explode("|",base64_decode(strtr(base64_decode(strtr(strtr(base64_encode($_COOKIE['session']),$default,$custom),$custom,$default)),$custom,$default)));

        $admin = $cookie_arr[0];

        if ($admin === "admin=1"){
               echo "<h1>Welcome Admin!</h1>";
               echo "FLAG: <REDACTED>";
        }
        else {
                echo "Thanks for visiting!";
        }

        echo "<br><a href='index.php'>Back</a>";
}
?>


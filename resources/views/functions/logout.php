<?php
//require '../bstrap.php';

//$_SESSION = array();
$_SESSION["login"] = "NULL";
$_SESSION["isLoggedIn"] = 0;
echo "You were logged out <br>";
echo "Header Not Working. <a href='/main'>Go Back</a>";
return redirect('/main');

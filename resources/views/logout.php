<?php
//require '../bstrap.php';

//$_SESSION = array();
$_SESSION["login"] = "NULL";
$_SESSION["isLoggedIn"] = 0;
echo "You were logged out <br>";

return view('main');

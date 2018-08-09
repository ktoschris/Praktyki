<?php


// require './bstrap.php';
require '../vendor/autoload.php';
require '../database/Connection.php';
require '../database/QuerryBuilder.php';
$pdo = Connection::make();
$query =  new QuerryBuilder($pdo);  // = require 'bstrap.php';*/

$username=$_POST["username"];
$password=$_POST["password"];
//Hash::check(request($password), $user->login);
var_dump($username);
var_dump($password);
$user = $query->selectAllcustomers($username,$password);
//var_dump($user[0]);
$user = $user[0];
//dd($user);
redirect('/main');


if(!empty($user)){

    if(Hash::check(request($password), $user->password))
    {
        $_SESSION["login"] = $username;
        $_SESSION["isLoggedIn"] = 1;
        var_dump($user);
        var_dump($_SESSION);
        echo "You are logged in as: <br>";
        echo $_SESSION["login"];
        echo ":/";
        return redirect('/main');


    }
    else
    {
        echo "Złe hasło!";
    }
}
else
{
    $_SESSION["login"] = "NULL";
    $_SESSION["isLoggedIn"] = 0;
    var_dump($_SESSION);
    echo "przyps";

}

?>


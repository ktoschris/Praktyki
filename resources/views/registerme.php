<?php
// require './bstrap.php';
require '../vendor/autoload.php';
require '../database/Connection.php';
require '../database/QuerryBuilder.php';
$pdo = Connection::make();
$query =  new QuerryBuilder($pdo);  // = require 'bstrap.php';*/

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$adress = $_POST["adress"];
$phone = $_POST["phone_nr"];

$password = Hash::make(request($password));

$user = $query->registerUser($username, $email, $password, $name, $surname, $adress, $phone);
//var_dump($user[0]);
var_dump($user);
//$user = $user[0];
header("Location: /");


/*if(!empty($user)){
    //echo  $user->name;
    //$_SESSION["login"] = $user[0];//->name;
    $_SESSION["login"] = $username;
    $_SESSION["isLoggedIn"] = 1;
    var_dump($user);
    var_dump($_SESSION);
    echo "You registered as: <br>";
    echo $_SESSION["login"];


    header("Location: /register");
}
else
{
    $_SESSION["login"] = "dupa";
    $_SESSION["isLoggedIn"] = 0;
    var_dump($_SESSION);
    echo "przyps";

}*/

?>


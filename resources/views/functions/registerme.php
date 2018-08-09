<?php
// require './bstrap.php';
require '../vendor/autoload.php';
require '../database/Connection.php';
require '../database/QuerryBuilder.php';
$pdo = Connection::make();
$query =  new QuerryBuilder($pdo);  // = require 'bstrap.php';*/

$username = $_POST["username"];
$password = $_POST["password"];
$confirmed_password = $_POST["confirmed-password"];
$email = $_POST["email"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$adress = $_POST["adress"];
$phone = $_POST["phone_nr"];

if($password == $confirmed_password) {
    $password = Hash::make(request($password));

    $user = $query->registerUser($username, $email, $password, $name, $surname, $adress, $phone);
//var_dump($user[0]);
    var_dump($user);
//$user = $user[0];
    echo "<br>Header Not Working. <a href='/register'>Go Back</a>";
    header("Location: /");
}
else
{
    echo "Password not confirmed";
    echo "<br>Header Not Working. <a href='/register'>Go Back</a>";
    header("Location: /register");
}

?>


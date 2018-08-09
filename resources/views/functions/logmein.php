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

//dd($user);

if(!empty($user)){
    $user = $user[0];

    if(Hash::check(request($password), $user->password))
    {
        $_SESSION["login"] = $username;
        $_SESSION["isLoggedIn"] = 1;
        var_dump($user);
        var_dump($_SESSION);
        echo "You are logged in as: <br>";
        echo $_SESSION["login"];
        echo "<br>Header Not Working. <a href='/'>Go Back</a>";
        return redirect('/main');


    }
    else
    {
        echo "Wrong password!";
        echo "<br>Header Not Working. <a href='/'>Go Back</a>";
        return redirect('/');
    }
}
else
{
    $_SESSION["login"] = "NULL";
    $_SESSION["isLoggedIn"] = 0;
    var_dump($_SESSION);
    echo "No such user";
    echo "<br>Header Not Working. <a href='/'>Go Back</a>";
    return redirect('/main');

}

?>


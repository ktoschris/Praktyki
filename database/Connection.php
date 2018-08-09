<?php

//namespace App\Http\Controllers;



class Connection
{

    public static function  make()
    {
        try{
            return new PDO('mysql:host=127.0.0.1;dbname=laravel_cms','root','admin');
        } catch(PDOException $exception){
            die($exception->getMessage());
        }
    }

}

$pdo=connection::make();
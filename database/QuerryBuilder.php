<?php

//namespace App\Http\Controllers;

class QuerryBuilder
{
    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo=$pdo;
    }


    public function selectAll($username,$password)
    {
        $statement = $this->pdo->prepare('select * from users where name = ? and password = ?');

        $statement->execute(array($username,$password));

        //return $statement->fetchAll(PDO::FETCH_CLASS);
        return /*array(*/$statement->fetchAll(PDO::FETCH_CLASS);/*, $statement->rowCount());*/
    }

    public function selectAllcustomers($username,$password)
    {
        $statement = $this->pdo->prepare("select * from Customers where login = '{$username}'");/*and password = ?*/

        $statement->execute();

        //return $statement->fetchAll(PDO::FETCH_CLASS);
        return /*array(*/$statement->fetchAll(PDO::FETCH_CLASS);/*, $statement->rowCount());*/
    }


    public function selectAllusers()
    {
        $statement =$this->pdo->prepare('select * from users');

        $statement->execute();
        //$rows = $statement->rowCount();

        //return $statement->fetchAll(PDO::FETCH_CLASS);
        return $statement->fetchAll(PDO::FETCH_CLASS);/*, $statement->rowCount());*/
    }

    public function selectAllfirmy()
    {
        $statement =$this->pdo->prepare('select * from firmy');

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }


    public function registerUser($username, $email, $password, $name, $surname, $adress, $phone_nr)
    {
        $statement =$this->pdo->prepare("insert into Customers(login, email, password, name, surname, adress, phone_nr, created_at, updated_at) values('{$username}', '{$email}', '{$password}','{$name}','{$surname}','{$adress}','{$phone_nr}', now(), now())");
        $statement->execute();
        //return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function addFirma($nazwa, $adres, $NIP)
    {
        $statement =$this->pdo->prepare("insert into firmy(nazwa, adres, NIP, created_at, updated_at) values('{$nazwa}', '{$adres}', '{$NIP}', now(), now())");
        $statement->execute();
        //return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectTypeproducts($type)
    {
        $statement =$this->pdo->prepare("select * from Products where type ='{$type}'");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectProduct($alias)
    {
        $statement =$this->pdo->prepare("select * from Products where alias ='{$alias}'");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }


}
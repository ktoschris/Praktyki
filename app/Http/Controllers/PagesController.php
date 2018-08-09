<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Http\Controllers\Connection;
//use App\Http\Controllers\QuerryBuilder;

class PagesController extends Controller
{
    public function index()
    {
        if(isset($_SESSION["isLoggedIn"]) and $_SESSION["isLoggedIn"] > 0) return redirect('/main');
        return view('logIn');
    }

    public function logmein()
    {
        $this->validate(request(), [
            'username' => 'required',
            'password' => 'required'
        ]);
            return view('functions.logmein');
            //require 'logmein.php';
    }

    public function main()
    {
        //dd($_SESSION);
        return view('main');
    }

    public function parts()
    {
        return view('store_pages.parts');
    }

    public function accessories()
    {
        return view('store_pages.accessories');
    }

    public function detailing()
    {
        return view('store_pages.detailing');
    }

    public function register()
    {
        if(isset($_SESSION["isLoggedIn"]) and $_SESSION["isLoggedIn"] > 0) return redirect('/main');
        return view('register');
    }

    public function registerme()
    {
        $this->validate(request(), [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirmed-password' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'adress' => 'required',
            'phone_nr' => 'required'
        ]);
        return view('functions.registerme');
    }

    public function logout()
    {
        return view('functions.logout');
    }

    public function item()
    {
        return view('store_pages.item');
    }

    public function cart()
    {
        return view('functions.showcart');
    }

    public function newcart()
    {
        return view('funcions.finalcart');
    }

    public function cashout()
    {
        return view('store_pages.cashout');
    }

    public function cashmeout()
    {
        return view('functions.cashmeout');
    }

}
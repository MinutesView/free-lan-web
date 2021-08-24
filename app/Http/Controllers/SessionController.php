<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }

    public function registerSeller(){
        return view('registerSeller');
    }

    public function stepOne(){
        return view('stepOne');
    }
    public function stepTwo(){
        return view('stepTwo');
    }
    public function sellerDash(){
        return view('seller_main.sellerDash');
    }
    public function service(){
        return view('all_user.service');
    }

    public function terms(){
        return view('terms');
    }




}

<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function featuredCity() {
        return view('featured_city');
    }

    public function userSignin() {
        return view('user_signin');
    }

    public function userSignup() {
        return view('user_signup');
    }
}

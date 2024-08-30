<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index(){
        $email = "alsymon@email.com";
        $name = "Alsymon";
        return view('profile')
        ->with("email", $email)
        ->with("name", $name);
    }
}
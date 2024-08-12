<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $email = 'Alsymon@gmail.com';
        $name = 'Alsymon';
        return view('user.index')
        ->with("email", $email)
        ->with("name", $name);
    }

}

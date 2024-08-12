<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $products = [
            [
                "name" => "Air Max",
                "image" => "https://via.placeholder.com/150",
                "description" => "Comfortable and stylish shoes.",
                "price" => "$19.99"
            ],
            // Add more products as needed
        ];
        return view('welcome')->with('products', json_encode($products));
    }
}


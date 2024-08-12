@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <h1>Welcome to E-Shop</h1>
            <p>Your one-stop shop for all your needs</p>
            <a href="{{ url('/shop') }}" class="btn">Shop Now</a>
        </div>
    </header>

    <!-- Product Section -->
    <section class="products">
        <div class="container">
            <h2>Featured Products</h2>
            @php
                $products = json_decode($products, true);
            @endphp
            @foreach ($products as $product)
                <div class="product-card">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }} Image">
                    <h3>{{ $product['name'] }}</h3>
                    <p>{{ $product['description'] }}</p>
                    <p>{{ $product['price'] }}</p>
                    <a href="{{ url('/product/1') }}" class="btn">View Details</a>
                </div>
            @endforeach
        </div>
    </section>
@endsection

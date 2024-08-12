@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
    <div class="container">
        <h1>User Profile</h1>
        <p>Name: {{ $name }}</p>
        <p>Email: {{ $email }}</p>
        <p>Age: 21</p>
        <p>Address: Malapit, San Isidro, Nueva Ecija</p>
    </div>
@endsection

<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'E-Shop')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .navbar {
    background-color: #f8f9fa;
    padding: 1rem;
}
        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            font-size: 1.5rem;
            text-decoration: none;
            color: #000;
        }

        .navbar-nav {
            list-style: none;
            display: flex;
            gap: 1rem;
        }

        .nav-item .nav-link {
            text-decoration: none;
            color: #007bff;
            font-size: 1rem;
            text-align: right;
        }

        .header {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 5rem 1rem;
        }

        .header .btn {
            background-color: #007bff;
            color: #fff;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
        }

        .products {
            padding: 2rem 1rem;
        }

        .products .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .product-card {
            border: 1px solid #ddd;
            padding: 1rem;
            border-radius: 4px;
            text-align: center;
        }

        .product-card img {
            max-width: 100%;
            height: auto;
        }

        .product-card h3 {
            font-size: 1.25rem;
            margin: 0.5rem 0;
        }

        .product-card p {
            font-size: 1rem;
            color: #007bff;
        }

        .product-card .btn {
            background-color: #007bff;
            color: #fff;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
        }

        .footer {
            background-color: #f8f9fa;
            text-align: center;
            padding: 1rem;
            position: relative;
            width: 100%;
        }
    </style>
</head>
<body>
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

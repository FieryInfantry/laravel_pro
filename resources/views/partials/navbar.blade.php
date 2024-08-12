<!-- resources/views/partials/navbar.blade.php -->
<nav class="navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">E-Shop</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/shop') }}">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/cart') }}">Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/user') }}">User</a>
            </li>
        </ul>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" style="width: 250px;" href="#">
        <img width="90%" src="{{ asset('img/logo2.png') }}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Brands
                </a>
                @if (isset($brands))
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach ($brands as $brand)
                    <a class="dropdown-item" href="">{{ $brand->name }}</a>
                    @endforeach
                </div>
                @endif
            </li>
        </ul>
        <div class="">
            @if (Route::has('login'))
                <li class="nav-item" style="list-style: none">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>&emsp;

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </li>
            @endif
        </div>
    </div>
</nav>


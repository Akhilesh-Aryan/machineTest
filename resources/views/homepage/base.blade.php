<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-info">
        <div class="container">
            <a class="navbar-brand " href="/">
                <span class="fw-bold me-4">LaravelTesting</span>
            </a>
            <ul class="navbar-nav ms-auto mr-5">
                @auth
                <a href="" class="btn btn-info my-3 ms-4 text-white">Home</a>
                @endauth
                @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" name="logout" value="Logout"
                        class="btn btn-danger  ms-3 mt-3 text-white">
                </form>
                @endauth

                @guest
                <li class="nav-item"><a href="{{ route('login') }}" class=" me-3 nav-link active">Login</a>
                </li>
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link active">Register</a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>
  
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
 @section('content')

@show
</body>

</html>

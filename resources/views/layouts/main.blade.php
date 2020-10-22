<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @section('nav-list-items')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tests.index') }}">Головна</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="dropbtn">Довідка</button>
                            <div class="dropdown-content">
                                <a class="nav-link" href="{{ route('docs.pass-test') }}">Проходження тесту</a>
                                <a class="nav-link" href="{{ route('docs.edit-test') }}">Редактор тесту</a>
                            </div>
                        </div>
                    </li>
                @show
            </ul>
        </div>
    </nav>
</header>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            @yield('content')
        </div>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'G.I.Ware')</title> <!--G.I.Ware is default when nothing is given-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        }
    nav li a{
        text-decoration: none;
        color: #808080;
    }
    nav li a:hover {
        text-decoration: none;
        color: #57A0D3;
    }
    nav .active-cyan-2 input[type=text]:focus:not([readonly]) {
        border-bottom: 1px solid #57A0D3;
        box-shadow: 0 1px 0 0 #57A0D3;
    }

    nav .active-cyan input[type=text] {
        border-bottom: 1px solid #57A0D3;
        box-shadow: 0 1px 0 0 #57A0D3;
    }

    nav .form-control{
        border: 0px;
        border-radius: 0px;
        background-color: inherit;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="/">
                <img src="https://giware.be/Content/Images/GIWare_wide_header.png" class="w-75 pr-1" alt="G.I.Ware">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mt-1">
                    <li class="nav-item">
                        <span class="nav-link"><a href="/about">About</a></span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link"><a href="/contact">Contact</a></span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link"><a href="">Home</a></span>
                    </li>
                </ul>
                <form class="form-inline md-form form-sm active-cyan active-cyan-2 mr-3">
                    <i class="fas fa-search" aria-hidden="true"></i>
                    <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>

<div class="container mt-3">
    @yield('content')
</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
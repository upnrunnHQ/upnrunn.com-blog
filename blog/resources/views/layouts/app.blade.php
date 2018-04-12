<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/main.css') }}">

    <!--[if lt IE 9]>
        <script src="{{ url('js/vendor/html5shiv.min.js') }}"></script>
    <![endif]-->

    <script src="{{ url('js/vendor/modernizr.custom.32229-2.8-respondjs-1-4-2.js') }}"></script>
</head>
<body>
    <!-- if the user has javascript disabled they can still use the menu -->
    <noscript>
        <div class="no-js-menu">
            <ul>
                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                <li><i class="fa fa-user"></i><a href="author.html">John Smith</a></li>
                <li><i class="fa fa-anchor"></i><a href="page.html">About</a></li>
                <li><i class="fa fa-star"></i><a href="favorites.html">Favorites</a></li>
                <li><i class="fa fa-paper-plane"></i><a href="contact.html">Contact</a></li>
                <li><i class="fa fa-file"></i><a href="post.html">Post Page</a></li>
                <li><i class="fa fa-file"></i><a href="post-sidebar.html">Post with Sidebar</a></li>
                <li><i class="fa fa-home"></i><a href="alt-home.html">Alternate Home</a></li>
                <li><i class="fa fa-image"></i><a href="category.html">Category Page</a></li>
            </ul>
        </div>
    </noscript>
    <!-- end no script -->


    @yield('content')
        

    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ url('js/vendor/jquery-1.11.2.min.js') }}"><\/script>')</script>

    <script src="{{ url('js/vendor/jquery.jpanelmenu.min.js') }}"></script>
    <script src="{{ url('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/vendor/fastclick.min.js') }}"></script>

    <script src="{{ url('js/main.js') }}"></script>
</body>
</html>

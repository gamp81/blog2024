<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="author" content="Gmiti" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('default/css/animate.css') }}">

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('default/css/bootstrap.min.css') }}">

    @yield('style')

    <link rel="stylesheet" href="{{ asset('default/css/index.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/highlight.js/latest/styles/github.min.css">

</head>
<body>
@inject('systemPresenter', 'App\Presenters\SystemPresenter')
<header id='moell-header'>
    <nav class='navbar navbar-default navbar-static-top'>
        <div class='container'>
            <div class="navbar-header">
                <!-- Mobile Toggle Menu Button -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url("/") }}" >{{ $systemPresenter->getKeyValue('blog_name') }}</a>
            </div>
            @include('default.navigation')
        </div>
    </nav>

</header>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <p>
            @yield('header-text')
        </p>
    </div>
</div>

<section id='content' style="margin-top:40px;">
    <div class='container'>
        <div class='row'>
            <div class='col-md-12' >
                @yield('content')
            </div>
        </div>
    </div>
</section>

@include('default.footer')

<!-- jQuery -->
<script src="{{ asset('default/js/jQuery-2.2.0.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('default/js/bootstrap.min.js') }}"></script>
<!-- Waypoints -->

<script src="{{ asset('default/js/index.js') }}"></script>

<script src="https://cdn.jsdelivr.net/highlight.js/latest/highlight.min.js"></script>

<script>
  hljs.initHighlightingOnLoad();
</script>

@yield('script')
</body>
</html>

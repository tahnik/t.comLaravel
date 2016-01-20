<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="Tahnik Mustasin">
    <meta name="Copyright" content="Tahnik Mustasin" />
    <meta name="Robots" content="INDEX,ALL" />
    <meta name="YahooSeeker" content="INDEX, FOLLOW" />
    <meta name="msnbot" content="INDEX, FOLLOW" />
    <meta name="googlebot" content="INDEX, FOLLOW" />
    <meta name="allow-search" content="yes" />
    <meta name="revisit-after" content="daily" />
    <meta name="Rating" content="General" />
    <meta name="site" content="http://www.tahnik.com" />
    <meta name="distribution" content="global" />
    <meta name="keywords" content="tahnik, mustasin, queen, mary, university, london, electronic, computer, systems, engineering">
    <!--Setting some keyword for search engines -->
    <meta name="description" content="This is daily blog created and maintained by Tahnik Mustasin">
    <!-- Setting a description -->
    <meta name="language" content="English" />
    <title>Tahnik's Blog</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    @yield('css')
    <link rel="shortcut icon" href="/resources/favicon.ico">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-60748914-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>
@yield('social_script_top')
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button id="collapse_button" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav_collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Tahnik's Blog</a>
        </div>

        <div class="collapse navbar-collapse" id="nav_collapse">
            <ul id="nav_ul" class="nav navbar-nav">
                <li><a href="{{ url('/') }}">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                @yield('links')
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/home') }}">
                        @if(\Illuminate\Support\Facades\Auth::check())
                            {{ \Illuminate\Support\Facades\Auth::user()->name }}
                        @else
                            {{ 'Control Panel' }}
                        @endif
                    </a></li>
            </ul>
        </div>
    </div>
</nav>
@yield('body')
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
@yield('script')
</body>
</html>

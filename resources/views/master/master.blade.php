<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" href=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="{{asset('assets/css/boot.css')}}"/>
    <!--    <link rel="stylesheet" href="assets/css/style.css"/>-->
    <link rel="stylesheet" href="{{asset('modules/header/header.css')}}"/>
    <link rel="stylesheet" href="{{asset('modules/social_fixed/social.css')}}"/>
    <link rel="stylesheet" href="{{asset('modules/services/services.css')}}"/>
    <link rel="stylesheet" href="{{asset('modules/slides/slides.css')}}"/>
    <link rel="stylesheet" href="{{asset('modules/footer/footer.css')}}"/>
    <link rel="stylesheet" href="{{asset('modules/about/about.css')}}"/>
    <link rel="stylesheet" href="{{asset('modules/posts/posts.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/mobile.css')}}"/>

    <title>Clínica Corcini - @yield('title')</title>
</head>
<body>

@yield('content')

<!--Plugins-->
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!--Template functions-->
<script src="{{asset('assets/js/functions.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>

</body>
</html>

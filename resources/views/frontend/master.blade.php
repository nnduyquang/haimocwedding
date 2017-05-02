<!DOCTYPE Html>
<Html lang="en-US" class="lang-en_US" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<meta http-equiv="content-type" content="text/Html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Hải Mộc Wedding</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    {{ Html::style('css/app.common.css') }}
    {{ Html::style('css/app.frontend.css') }}
    {{ Html::style('css/frontend.css') }}
    @yield('styles')
</head>
<body>
<header id="header" class="p-header is-lang-en_US" data-j-class="Header">
    @include('frontend.menu.menu')
</header>
@yield('slider')
@yield('container')
@include('frontend.footer.footer')
{{ Html::script('js/core.common.js') }}
{{ Html::script('js/core.frontend.js') }}
@yield('scripts')
{{ Html::script('js/scripts.js') }}
</body>

</Html>
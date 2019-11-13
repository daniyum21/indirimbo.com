<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="https://www.facebook.com/2008/fbml">
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <meta property="og:title" content="@if(isset($pageTitle)) {{$pageTitle}} @else Indirimbo zo gushimisha Imana n'indirimbo z'agakiza @endif "/>
    <meta property="og:image" content="http://indirimbo.com/img/screenshot.png"/>
    <meta property="og:site_name" content="Indirimbo zo gushimisha Imana n'indirimbo z'agakiza"/>
    <meta property="og:description" content="@if(isset($indirimbo->ibice)) {{ strip_tags($indirimbo->ibice[0]->ChapterText)}} @else Indirimbo Zo Gushimisha imana hamwe n'indirimbo z'Agakiza
Uru ni urubuga rw'indirimbo zo gushimisha Imana n'iz'agakiza, nkuko zigaragara mugitabo cy'indirimbo bamwe bitwaza mumateraniro. @endif"/>
    <title>@if(isset($pageTitle)) {{$pageTitle}}@endif Indirimbo Z'Imana. </title>
<meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <script src="https://kit.fontawesome.com/62c4ca761d.js" crossorigin="anonymous"></script>

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.spacelab.css') }}" rel="stylesheet" type="text/css">
<!-- Bootstrap theme -->
    {{--<link href="{{ asset('css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css">--}}
<!-- Custom styles for this template -->
    <link href="{{ asset('css/theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/custom-page.css?v1.0')}}" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-60692688-1', 'auto');
    ga('send', 'pageview');

</script>
</head>

<body role="document">
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=209512405731363";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Fixed navbar -->
@include('layouts.navigations.public')
<div class="container" style="background-color:#E3E4E6; padding-top: 70px;padding-right: 10px;">
@yield('contents')

</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="{{ asset('js/jquery/1.11.1/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/docs.min.js')}}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Indirimbo zo gushimisha Imana| indirimbo z'agakiza</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.spacelab.css') }}" rel="stylesheet" type="text/css">

    <!-- Bootstrap theme -->
    {{--<link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css">--}}

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/custom-page.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/bootstrap-wysihtml5.css') }}" rel="stylesheet" type="text/css">




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{!! asset('js/jquery/1.11.1/jquery.min.js') !!}"></script>

    <script type="text/javascript" src="{!! asset('js/bootstrap.min.js') !!}"></script>

    <script type="text/javascript" src="{!! asset('js/wysihtml5-0.3.0.js') !!}"></script>

    <script type="text/javascript" src="{!! asset('js/search-styles.js') !!}"></script>

    <script type="text/javascript" src="{!!   asset('js/bootstrap3-wysihtml5.js') !!}"></script>



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@include('layouts.navigations.admin')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="/admin/indirimbo">Indirimbo</a></li>
                <li><a href="/admin/indirimbo/create">Create Igitabo Song</a></li>
                <li><a href="/admin/indirimbo/umuhanzi/create">Create Artist Song</a></li>
                <li><a href="/admin/indirimbo/korali/create">Create Choir Song</a></li>
                <li><a href="/admin/users">Users</a></li>
                <li><a href="/admin/abahanzi">Abahanzi</a></li>
                <li><a href="/admin/choirs">Korali</a></li>
                <li><a href="/admin/abahanzi">Abahanzi</a></li>
                <li><a href="/admin/choirs">Korali Songs</a></li>
                <li><a href="admin/Analytics">Analytics</a></li>
                <li><a href="admin/export">Export</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="/admin/ads">Ads</a></li>
                <li><a href="/admin/news">news</a></li>
                <li><a href="">One more nav</a></li>
                <li><a href="">Another nav item</a></li>
                <li><a href="">More navigation</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Nav item again</a></li>
                <li><a href="">One more nav</a></li>
                <li><a href="">Another nav item</a></li>
            </ul>
        </div>
        </div>
    </div>

</div>
<div class="container">
    @yield('contents')
</div>


</body>
</html>
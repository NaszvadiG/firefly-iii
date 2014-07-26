<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{URL::route('index')}}/">
    <title>Firefly</title>

    <?php echo stylesheet_link_tag(); ?>
    @yield('styles')


    <!-- Bootstrap -->
    <!--
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/site.css" rel="stylesheet">
    -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    -->
    <![endif]-->
</head>
<body>
<div class="container">
    @include('partials.menu.'.$menu)
    @include('partials.flashes')
    @yield('content')
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/javascript/bootstrap3-typeahead.min.js"></script>

-->
<?php echo javascript_include_tag(); ?>
@yield('scripts')
</body>
</html>
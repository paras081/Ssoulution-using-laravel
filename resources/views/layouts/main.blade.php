<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sustainable Solutions</title>
{{-- using local file--}}
    <!-- MDB icon -->
    <link rel="icon" href="{{ asset('demo/img/mdb-favicon.ico') }}" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('demo/css/mdb.min.css') }}" />
{{--css for portfolio page--}}

<!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('demo/css/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('demo/css/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="{{ asset('demo/css/vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">
    <link href="{{ asset('demo/css/stylish-portfolio.min.css') }}" rel="stylesheet">
{{--    css for portfolio page over--}}
    {{--------------------using cdn link-------------------------}}
<!-- Font Awesome -->
{{--    <link--}}
{{--        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"--}}
{{--        rel="stylesheet"--}}
{{--    />--}}
{{--    <!-- Google Fonts -->--}}
{{--    <link--}}
{{--        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"--}}
{{--        rel="stylesheet"--}}
{{--    />--}}
{{--    <!-- MDB -->--}}
{{--    <link--}}
{{--        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.css"--}}
{{--        rel="stylesheet"--}}
{{--    />--}}
{{--    ---------------------------------------}}
</head>
<body>
<!-- Start your project here-->
@include('layouts.navbar')
@include('layouts.headercarousal')
@yield('content')
@include('layouts.footer')
<!-- End your project here-->
</body>

{{--using local file--}}
<!-- MDB -->
<script type="text/javascript" src="{{ asset('demo/js/mdb.min.js') }}"></script>

{{----------------------------------}}
<!-- MDB -->
{{--<script- using cdn link---------------}}
{{--    type="text/javascript"--}}
{{--    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"--}}
{{--></script>--}}
{{-----------------------------------}}
{{--for portfolio page--}}
<script src="{{ asset('demo/css/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('demo/css/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('demo/css/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('demo/js/stylish-portfolio.min.js') }}"></script>
{{--for portfolio page ends--}}
<!-- Custom scripts -->
<script type="text/javascript"></script>
</html>

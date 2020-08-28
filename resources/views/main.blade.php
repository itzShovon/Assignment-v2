<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    {{-- <meta name="api-base-url" content="{{ url('Dev/assignment_v2/public') }}" /> --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="{{ config('app.subtitle', 'Laravel') }}">


    <title>{{ config('app.title', 'Laravel') }}</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />


    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('template/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />



    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ asset('template/css/sleek.css') }}" />

    <!-- FAVICON -->
    <link href="{{ asset('template/img/favicon.png" rel="shortcut icon') }}" />
    <script src="{{ asset('template/plugins/nprogress/nprogress.js') }}"></script>
</head>


<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <div id="app"></div>

    <script src="{{ asset('js/app.js') }}"></script>




    <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('template/js/sleek.bundle.js') }}"></script>

</body>

</html>

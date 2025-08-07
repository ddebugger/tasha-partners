<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Financail Dashboard</title>
    <link rel="stylesheet" href="{{asset('dist/css/index.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

</head>
<body>
    <!-- main container -->
    <div class="admin-app-container ">

        <div class="app-content">
            <!-- Include Header -->
            <div class="header-container">
                <div class="navbar">
                    @include('layout.admin.header')
                </div>

                <div class="breadcrumb">
                    @yield('breadcrumb')
                </div>
            </div>

            <!-- Page-specific content -->
            <div class="app-content-container">
                @yield('content')
            </div>

        </div>
    </div>

    <script src="{{asset('dist/js/index.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</body>
</html>

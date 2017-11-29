<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') | Talk</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/postsi.css') }}" rel="stylesheet">
 
</head>

<body>



<div class="wrapper">
    
        @include('layouts.partials.sidebar')
  
    
    <div class="page-wrapper">
            @yield('content')
    </div>

<!-- /#wrapper -->
</div>

    <!-- jQuery -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
  
</body>

</html>

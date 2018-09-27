<html>
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>

</body>
</html>
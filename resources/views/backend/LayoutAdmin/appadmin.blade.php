<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="{{asset('AdminFront/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminFront/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminFront/css/sidenav.css')}}">
    <link rel="stylesheet" href="{{asset('/AdminFront/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('AdminFront/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('AdminFront/css/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminFront/css/datatables-select.min.css')}}">

</head>
<body class="fix-header fix-sidebar">

@include('backend.LayoutAdmin.menu')

@yield('content')


</div>
</div>
<script src="{{asset('AdminFront/js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('AdminFront/js/popper.min.j')}}s"></script>
<script type="text/javascript" src="{{asset('AdminFront/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('AdminFront/js/mdb.min.js')}}"></script>
<script src="{{asset('AdminFront/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('AdminFront/js/sidebarmenu.js')}}"></script>
<script src="{{asset('AdminFront/js/sticky-kit.min.js')}}"></script>
<script src="{{asset('AdminFront/js/custom.min-2.js')}}"></script>
<script src="{{asset('AdminFront/js/datatables.min.js')}}"></script>
<script src="{{asset('AdminFront/js/datatables-select.min.js')}}"></script>
<script src="{{asset('AdminFront/js/custom.js')}}"></script>
<script src="{{asset('AdminFront/js/axios.min.js')}}"></script>
{{--<script type="text/javascript" src="https://unpkg.com/default-passive-events"></script>--}}

@stack('script')
</body>
</html>

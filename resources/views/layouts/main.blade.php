<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
<body>

 	@yield('content')

 <footer class="row">
    @include('partials.footer')
 </footer>

</div>
</body>
</html>
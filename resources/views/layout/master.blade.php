<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title><?=$pTitle ?? 'MSN Laravel'?></title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">
    <style>
        @yield('style')
    </style>

</head>

<body>
    @include('layout.nav')

    <main class="container">
        @yield('content')
    </main>
    
    <script>
        @yield('script')
    </script>

    @include('layout.footer')
</body>
</html>
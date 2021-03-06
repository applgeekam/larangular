<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>404</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body class="app">
<div class='pos-a t-0 l-0 bgc-white w-100 h-100 d-f fxd-r fxw-w ai-c jc-c pos-r p-30'>
    <div class='mR-60'>
        <img alt='#' src='{{ asset('images/404.png') }}' />
    </div>

    <div class='d-f jc-c fxd-c'>
        <h1 class='mB-30 fw-900 lh-1 c-red-500' style="font-size: 60px;">404</h1>
        <h3 class='mB-10 fsz-lg c-grey-900 tt-c'>Oups, page introuvable</h3>
        <p class='mB-30 fsz-def c-grey-700'>La page que vous recherchez n'existe pas ou a été déplacée.</p>
        <div>
            <a href="{{ route('home') }}" type='primary' class='btn btn-primary'>Aller à l'acceuil</a>
        </div>
    </div>
</div>
</body>
</html>

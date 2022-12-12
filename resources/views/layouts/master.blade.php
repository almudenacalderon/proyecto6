<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GÉNESIS</title>
    <link rel="stylesheet" href="assets/estilos.css">
    <link rel="icon" href="img/favicon-32x32.png" type="image/x-icon">
</head>

<body>
    <!--- banner --->
    @include('partials.header')

    <section>
        @yield('content')
    </section>
    <!--- footer --->
    @include('partials.footer')

</body>
</html>

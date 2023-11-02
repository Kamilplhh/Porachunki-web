<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Porachunki">

    <title>Porachunki</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@700&family=Raleway:wght@300&display=swap" rel="stylesheet">

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>

<body>
    @section('navbar')
    <div class="container navi">
        <div class="row">
            <h4 class="col-md-6 col-sm-3 text-left">Porachunki</h4>
            <div class="col-md-6 col-sm-9 text-right">
                <h4 class="px-3 bigS"><a href="#home" class="text">Home</a></h4>
                <h4 class="px-3 bigS"><a href="#contact" class="text">Contact</a></h4>
                <h4 class="px-4 bigS"><a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></h4>
                <h4 class="px-2 bigS"><a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></h4>
                <h4 class="pr-5 smallS"><i class="fa-solid fa-bars"></i></h4>
            </div>
        </div>
        <div class="navi-mobile">
            <div class="d-flex flex-column">
                <h4><a href="#home" class="text">Home</a></h4>
                <h4><a href="#contact" class="text">Contact</a></h4>
                <h4><a href="https://www.instagram.com" target="_blank" class="text">Instagram</a></h4>
                <h4><a href="https://www.facebook.com" target="_blank" class="text">Facebook</a></h4>
            </div>
        </div>
    </div>
    @show
    <div class="showcase" id="home">
    </div>
    @yield('content')
</body>

</html>
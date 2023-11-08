<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Porachunki">

    <title>Porachunki</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@700&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/glacial-indifference-2" rel="stylesheet">

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>

<body>
    @section('navbar')
    <div class="container navi">
        <div class="limit text-right naviText">
            <h4 class="px-3"><a href="#offer" class="text">Oferta</a></h4>
        </div>
    </div>
    @show
    <div class="showcase">
        <div class="info text-center">
            <h1>
                Biuro Rachunkowe PORACHUNKI <br>
                787-608-737 <br>
                KONTAKT@BIUROPORACHUNKI.PL
            </h1>
        </div>
    </div>
    @yield('content')
</body>

</html>
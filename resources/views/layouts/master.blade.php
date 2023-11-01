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
                    <h4 class="px-3"><a href="/" class="text" id="home">Home</a></h4>
                    <h4 class="px-3"><a href="/contact" class="text" id="contact">Contact</a></h4>
                    <h4><a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram px-4"></i></a></h4>
                    <h4><a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-f px-2"></i></a></h4>
                </div>
            </div>
        </div>
    @show
    <div class="showcase">
        
    </div>
        @yield('content')
</body>

</html>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
    <title>laravel-primi-passi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <div class="container text-white my-5 border rounded py-5">
        <div class="text-center pb-5">
            <h1 class="mb-5">{{ $hello }}</h1>
        </div>
        <div class="p-2">
            <h2 class="text-white mb-5">Home Page</h2>
            <h5 class="text-info pb-2">Lista Pagine:</h5>
        </div>
        <div>
            <a href="{{ route("contacts") }}"><button class="btn btn-primary">Contatti</button></a>
            <a href="{{ route("aboutus") }}"><button class="btn btn-primary mx-3">About Us</button></a>
            <a href="{{ route("info") }}"><button class="btn btn-primary">Info</button></a>
        </div>
    </div>
</body>
</html>

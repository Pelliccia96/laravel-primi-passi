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
        <div class="text-white p-2">
            <h2>Info Page</h2>
        </div>
        <div class="text-info p-2">
            <h3>{{ $name }}</h3>
            <h4>{{ $surname }}</h4>
            <h5>{{ $info }}</h5>
        </div>
        <div class="mt-5">
            <a href="{{ route("home") }}"><button class="btn btn-danger">Back to Home</button></a>
        </div>
    </div>
</body>
</html>

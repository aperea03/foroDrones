<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página no encontrada</title>
    <style>
        body {
            background-color: #E6E6FA;
            font-family: Arial, sans-serif;
            color: #800080;
            text-align: center;
            padding-top: 100px;
        }

        h1 {
            font-size: 50px;
            margin-bottom: 30px;
        }

        p {
            font-size: 24px;
            margin-bottom: 40px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #6A0DAD;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #9B59B6;
        }
    </style>
</head>
<body>
    <h1>Error 404 - Página no encontrada</h1>
    <p>Lo sentimos, la página que estás buscando no pudo ser encontrada.</p>
    <a href="{{ url('/') }}">Volver a la página principal</a>
</body>
</html>
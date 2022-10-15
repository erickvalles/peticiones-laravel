<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevas noticias para tu solicitud</title>
</head>
<body>
    <h1>{{ $datosEmail["titulo"] }}</h1>

    <p>
      {{$datosEmail["cuerpo"]}}
    </p>
</body>
</html>

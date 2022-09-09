<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
    <main>
        <h1>Trains:</h1>
        <div class="row">
            @foreach ($trains as $train)
                @include('includes.train-card', ['train' => $train])
            @endforeach
        </div>
    </main>
</body>
</html>
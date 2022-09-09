<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
</head>
<body>
    <main>
        <h1>Trains:</h1>
        <ul>
            @foreach ($trains as $train)
                <li>
                    {{ $train->company }}
                </li>
            @endforeach
        </ul>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @foreach ($trains as $item)
        <h2>Treno {{ $item->id }}: </h2>
        <ul>
            <li>N.treno: {{ $item->code_train }}</li>
            <li>Stazione di Partenza: {{ $item->departure_station }}</li>
            <li>Stazione di Arrivo: {{ $item->arrival_station }}</li>
            <li>Orario di Partenza: {{ $item->departure_time }}</li>
        </ul>
        @endforeach
    </div>
</body>
</html>
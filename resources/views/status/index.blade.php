<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TrainOpeStatus</title>
</head>
<body>
<div class="content">
    <div class="list-group">
        @foreach($item as $items)
        <p>
            {{ $items }}
        </p>
        @endforeach
    </div>
</div>
</body>
</html>

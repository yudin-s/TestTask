<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test Task</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        .number{
            padding: 10px;
            background: white;
        }

        .number:nth-child(2n){
            background: rgba(0,0,0,0.1);
        }

    </style>
</head>
<body>

    <div class="flex-center position-ref full-height">
        @foreach($numbers as $number)
            <div class="number">{{$number}}</div>
        @endforeach
    </div>
</body>

<html></html>
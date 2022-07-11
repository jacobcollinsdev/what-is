<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>WhatIs</title>
    </head>
    <body>
        <h1>Hello</h1>
        @foreach ($keywords as $keyword)
            <p>{{$keyword->name}}</p>
        @endforeach
    </body>
</html>

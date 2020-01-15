<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Travelex App</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <app></app>
</div>
{{-- <script src="{{ mix('js/bootstrap.js') }}"></script> --}}
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

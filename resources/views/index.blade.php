<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content ="width=device-width, initial-scale=1" >
    <link rel="stylesheet" href="{{ asset('/css/index_style.css')}}" />

    <link rel="icon" href="{{ asset('/media/favicon.ico')}}" />
</head>


<body>
    @include('components/nav_bar_customer')
</body>
<footer>
    @include('components/footer')
</footer>

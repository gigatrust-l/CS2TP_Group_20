<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>{{ config('app.name', 'Laravel') }}</title>    
    <link rel="stylesheet" href="{{ asset('/css/index_style.css')}}" />
    
    <link rel="icon" href="{{ asset('/media/favicon.ico')}}" />
</head>


<body>
    @include('components/nav_bar_customer')
</body>

</html>
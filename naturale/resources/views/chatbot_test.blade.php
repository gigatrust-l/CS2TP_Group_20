<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.ico" />
    <title>Naturale Chatbot</title>
</head>

<body>

    @include('components/nav_bar_customer')

    @include('components/chatbot_button')


    <footer>
        @include('components/footer')
    </footer>

</body>

</html>
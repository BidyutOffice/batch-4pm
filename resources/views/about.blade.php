<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>about page</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <h1>welcome to about page {{ $userid }}</h1>

    <a href="{{ route('home') }}">home</a>
    <a href="{{ route('conatct') }}">contact us</a>
    <a href="{{ route('about.userid', ['userid' => 30]) }}">about us</a>
</body>

</html>

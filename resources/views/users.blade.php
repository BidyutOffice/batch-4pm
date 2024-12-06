<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>all users</title>
</head>

<body>


    <h2>all users info</h2>
    @if (Session::has('success'))
        {{ Session::get('success') }}
    @endif
    @if (Session::has('error'))
        {{ Session::get('error') }}
    @endif
    <ul>
        @foreach ($allusers as $user)
            <li><a href="{{ route('users.show', ['user' => $user['id']]) }}">{{ $user['email'] }}</a></li>
        @endforeach
    </ul>
    {{ $allusers->links() }}
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>single user page</title>
</head>

<body>
    <h3>show single user info here</h3>
    <h2>name: {{ $user['name'] }}</h2>
    <h2>email: {{ $user['email'] }}</h2>
    <form action="{{ route('users.destroy', ['user' => $user['id']]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">delete account</button>
    </form>
</body>

</html>

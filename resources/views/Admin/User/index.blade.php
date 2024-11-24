<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Usuarios</p>
    <a href="{{route('user.create')}}">Novo User</a>
    @forelse ($users as $user)
        <p>{{ $user->name }} - {{ $user->email }}</p>
    @empty
        <p>Dont have data</p>
    @endforelse


</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
    <h1>Data Profil</h1>
    <ul>
        @foreach ($profile as $item)
            <li>Nama: {{ $item->nama }}</li>
            <li>Email: {{ $item->email }}</li>
        @endforeach
    </ul>
</body>
</html>
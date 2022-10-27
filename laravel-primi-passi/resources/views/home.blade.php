@php
    $pages = [
        [
            'name' => 'Privacy & Policies',
            'path' => '/privacy',
        ],
        [
            'name' => 'Contact Us',
            'path' => '/contact',
        ],
        [
            'name' => 'About Us',
            'path' => '/about',
        ],
        [
            'name' => 'Impostazioni',
            'path' => '/settings',
        ],
    ];

@endphp

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Laravel</title>
</head>

<body>

    <h1>Questa è l'homepage</h1>

    <ul class="page-links">

        @foreach ($pages as $page)
            <li> <a href="{{ $page['path'] }}">{{ $page['name'] }}</a> </li>
        @endforeach

    </ul>

</body>

</html>

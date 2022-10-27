@php
    $pages = [
        [
            'name' => 'Privacy Policies',
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

<header>
    <nav class="container">
        <ul class="page-links">

            @foreach ($pages as $page)
                <li> <a href="{{ $page['path'] }}">{{ $page['name'] }}</a> </li>
            @endforeach

        </ul>
    </nav>
</header>

<style>
    nav>ul {
        display: flex;
        justify-content: space-around;

        margin: 0 auto;
        list-style-type: none;
    }
</style>

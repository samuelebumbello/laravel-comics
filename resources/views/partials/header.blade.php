@php
$menu_header = config('menus.header_menu');
@endphp


<header>
    <header>
        <div class="logo">
        <img src="/img/dc-logo.png" alt="Logo dc">
    </div>

    <nav>
        <ul>
            @foreach ($menu_header as $link)
            <li>
            <a  href="{{ route($link['href']) }}" class="{{ Route::currentRouteName() === $link['href'] ? 'active' : ' ' }}">{{ $link['text'] }}</a>
            </li>
            @endforeach
        </ul>
    </nav>
    </header>
</header>

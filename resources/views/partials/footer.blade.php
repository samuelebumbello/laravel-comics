@php
$menu_header = config('menus.header_menu');
$footer_dc = config('menus.footer_dc');
$footer_sites = config('menus.footer_sites');
$footer_shop = config('menus.footer_shop');
@endphp

<footer>
    <div class="top">
    <div class="colonne">
        <div class="col-column">
            {{-- dc comics --}}
        <div class="col">
        <h3>dc comics</h3>
        <nav>
        <ul>
            @foreach ($menu_header as $link)
            <li>
            <a  href="{{ route($link['href']) }}" class="{{ Route::currentRouteName() === $link['href'] ? 'active' : ' ' }}">{{ $link['text'] }}</a>
            </li>
            @endforeach
        </ul>
        </nav>
    </div>

    {{-- Shop --}}
    <div class="col"><h3>shop</h3>
        <ul>
            @foreach ($footer_shop as $item )
                <li><a class="#" href="#">{{ $item[ 'text' ] }}</a></li>
            @endforeach
        </ul>
    </div>
    </div>

    {{-- Footer DC --}}

    <div class="col">
    <h3> dc </h3>
    <nav>
        <ul>
            @foreach ($footer_dc as $item )
                <li><a class="#" href="#">{{ $item[ 'text' ] }}</a></li>
            @endforeach
        </ul>
    </nav>
    </div>

    {{-- Sites --}}
    <div class="col">
    <h3>sites</h3>
    <nav>
        <ul>
            @foreach ($footer_sites as $item )
                <li><a class="#" href="#">{{ $item[ 'text' ] }}</a></li>
            @endforeach
        </ul>
    </nav>
    </div>
    </div>
    <div class="logo">
        <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="logo-dc">
    </div>
    </div>
    <div class="bottom">
    <div class="container">
    <div class="button">
        <button>SIGN-UP NOW!</button>
    </div>
    <div class="icons">
        <span><h3>FOLLOW US</h3></span>
        <nav>
        <ul>
            <li><a href="#"><img src="/img/footer-facebook.png" alt="logo facebook"></a></li>
            <li><a href="#"><img src="/img/footer-twitter.png" alt="logo twitter"> </a></li>
            <li><a href="#"><img src="/img/footer-youtube.png" alt="logo youtube"></a></li>
            <li><a href="#"><img src="/img/footer-pinterest.png" alt="logo pinterest"></a></li>
            <li><a href="#"><img src="/img/footer-periscope.png" alt="logo periscope"></a></li>
            </ul>
        </nav>
        </div>
    </div>
    </div>
</footer>

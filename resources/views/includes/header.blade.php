<header>
    <div class="logo_for_mobile ds-none">
        <img src="{{asset('images/desktop/logo.png')}}" alt="">
    </div>
    <div class="go_out_in_1170 ds-none">
        <div class="logo_fix">
            <img src="{{asset('images/desktop/logo.png')}}" alt="">
        </div>
    </div>

    <div class="logo_fix_up ds-none">
        <img src="{{asset('images/desktop/logo.png')}}" alt="">
    </div>

    <div class="menu">
        <span class="go_out_in_1170">Menu</span>
        @if(isset($menuColor))
            @if($menuColor === "sand")
                <img src="{{asset('images/desktop/menu.png')}}" alt="">
            @else
                <img src="{{asset('images/desktop/menu_2.png')}}" alt="">
            @endif
        @else
            <img src="{{asset('images/desktop/menu.png')}}" alt="">
        @endif
    </div>

    <nav class="nav ds-none">
        <h1 class="ds-none">Navegue através do nosso site.</h1>
        <div class="close_menu">X</div>
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="">Sobre</a></li>
            <li><a href="">Serviços</a></li>
        </ul>
    </nav>
</header>


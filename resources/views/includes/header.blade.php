<header>
    <div class="menu">
        <span class="go_out_in_1170 j-chance-color">Menu</span>
        <img class="j-img-sand ds-none" src="{{asset('images/desktop/menu.png')}}" alt="">
        <img class="j-img-wine ds-none" src="{{asset('images/desktop/menu_2.png')}}" alt="">
        @if(isset($menuColor))
            @if($menuColor === "sand")
{{--                wine--}}
                <img class="j-img-menu" src="{{asset('images/desktop/menu.png')}}" alt="">
            @else
                {{--Color wine--}}
                <img class="j-img-menu" src="{{asset('images/desktop/menu_2.png')}}" alt="">
            @endif
        @else
            <img class="j-img-menu" src="{{asset('images/desktop/menu.png')}}" alt="">
        @endif
    </div>

    <nav class="nav ds-none">
        <h1 class="ds-none">Navegue através do nosso site.</h1>
        <div class="close_menu">X</div>
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/sobre')}}">Sobre</a></li>
        </ul>
    </nav>
</header>


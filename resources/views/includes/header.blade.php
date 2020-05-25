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
    <div class="menu_mobile ds-none">
        <img class="" src="{{asset('images/desktop/menu_2.png')}}" alt="">
    </div>

    <nav class="nav ds-none">
        <div>
            <div class="close_menu"><span>Fechar Menu</span><img src="{{asset('images/desktop/icon_cross.png')}}"
                                                                 alt=""></div>
        </div>
        <div class="nav_content">
            <a style="padding: 0;" href="{{asset('/')}}"><img class="nav_content_logo"
                                                              src="{{asset('images/desktop/logo_dark.png')}}"
                                                              alt=""></a>

            <h1 class="ds-none">Navegue através do nosso site.</h1>

            <ul>
                <li>
                    <div class="nav_menu_item">
                        <img src="{{asset('images/desktop/icon_plus.png')}}" alt="">
                        <a href="{{url('/')}}">Home</a>
                    </div>
                </li>
                <li>
                    <div class="nav_menu_item">
                        <img src="{{asset('images/desktop/icon_plus.png')}}" alt="">
                        <a href="{{url('/sobre')}}">Clínica Corcini</a>
                    </div>
                </li>
                @foreach($categories as $cMaster)
                    @if($cMaster->parent == null)
                        <li>
                            <div class="nav_menu_item">
                                <img src="{{asset('images/desktop/icon_plus.png')}}" alt="">
                                <a style="color: #ffffff;"
                                   href="{{route('catMaster', [$cMaster->slug, $cMaster->id])}}">{{$cMaster->menu_name}}</a>
                            </div>
                        </li>
                    @endif
                @endforeach
                <li>
                    <div class="nav_menu_item">
                        <img src="{{asset('images/desktop/icon_plus.png')}}" alt="">
                        <a href="{{url('/contato')}}">Contato</a>
                    </div>
                </li>
            </ul>
            <div class="social_media_header ds-none">
                <a target="_blank" href="https://www.instagram.com/draanacorcini/?hl=pt-br"><img
                        src="{{asset('images/desktop/icon_instagram.png')}}" alt=""></a>
                <a target="_blank" href="https://www.facebook.com/draanaceciliacorcini/"><img
                        src="{{asset('images/desktop/icon_facebook.png')}}" alt=""></a>
            </div>
        </div>
    </nav>
</header>


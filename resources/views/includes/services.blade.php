<section id="slide4" class="services_container position-relative">
    <div class="logo_on_mobile_services ds-none">
        <img src="{{asset('images/desktop/logo_dark.png')}}" alt="">
    </div>
    <!--retirado pela ale-->
    <div class="logo_dark position-absolute ds-none">
        <img class="j_logo_dark" src="{{asset('images/desktop/logo_dark.png')}}" alt="">
    </div>
    <div class="content"><!--1170px-->

        <div class="content800"><!--800px-->
            <header>
                <h1 class="title">Descubra um mundo <br/>de muitas possibilidades</h1>
                <div class="tagline">
                    <img src="{{asset('images/desktop/line_white.png')}}" alt="">
                    <p>Escolha o serviço que você deseja realizar</p>
                </div>
            </header>
        </div>

        <div class="services_items_content accordion">

            @foreach($categories as $category)
                @if($category->parent == null)
                    <article class="service_item ac-item">
                        <header class="ac-title">
                            <img class="cross ds-none" src="{{asset('images/desktop/icon_cross.png')}}" alt="">
                            <img class="plus" src="{{asset('images/desktop/icon_plus.png')}}" alt="">
                            <h1>{{$category->title}}</h1>
                        </header>
                        <div class="service_item_nav ac-content">
                            <ul>
                                @foreach($subCategories as $sub)
                                    @if($sub->parent == $category->id)
                                        <li><a href="{{url('servicos/'.$sub->slug.'/'.$sub->id)}}">{{$sub->title}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </article>
                @endif
            @endforeach

        </div>
    </div>
</section>

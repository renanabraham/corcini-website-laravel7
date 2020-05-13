<!--A classe <"j_logo_position"> é para disparar o evento do logo-->
<div class="go_out_in_860">
    @php
        $number = 1;
    @endphp
    @foreach($bossCategory as $boss)
        <div class="page"><!--pluging de scroll com teclado-->
            <div id="slide{{$boss->id}}"
                 class="slides_container j-slide {{($boss->order == 1 ? 'j_logo_position' : '')}}"
                 style="background: url('images/desktop/slide_{{$boss->id}}.png') center center no-repeat;">
                <div class="content"><!--1170-->
                    <div class="content800"><!--800px-->
                        <article class="slide_item">
                            <header>
                                <div class="slide_navigator">
                                    <a class="wc_goto" href="#slide{{$boss->order - 1}}"><img
                                                src="{{asset('images/desktop/arrow_up.png')}}" alt=""></a>
                                    <span style="{{($boss->order == 1 ? 'margin-left: 4px;' : '')}}">0{{$boss->order}}</span>
                                    <a class="wc_goto" href="#slide{{$number+=1}}"><img
                                                src="{{asset('images/desktop/arrow_down.png')}}" alt=""></a>
                                </div>
                                <div class="tagline">
                                    <img src="images/desktop/line.png" alt="">
                                    <p>{{$boss->subtitle}}</p>
                                </div>
                                <h1 class="title" data-animation="flip">{{$boss->title}}</h1>
                                <a class="know" href="servicos/{{$boss->slug}}/{{$boss->id}}">Saiba mais</a>
                            </header>
                            <div class="slide_category_nav">
                                <img src="{{asset('images/desktop/line.png')}}" alt="">
                                <ul>
                                    @foreach($subCategories as $sub)
                                        @if($sub->parent == $boss->id)
                                            <li><a href="servicos/{{$sub->slug}}/{{$sub->id}}">+ {{$sub->title}}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="go_in_860 ds-none">
    @php
        $number = 1;
    @endphp
    @foreach($bossCategory as $boss)
        <div class=""><!--pluging de scroll com teclado-->
            <div id="slide{{$boss->id}}"
                 class="slides_container j-slide {{($boss->order == 1 ? 'j_logo_position' : '')}}"
                 style="background: url('images/mobile/slide{{$boss->id}}_mobile.png') center center no-repeat;">
                <div class="content"><!--1170-->
                    <div class="content800"><!--800px-->
                        <article class="slide_item">
                            <header>
                                <div class="slide_navigator">
                                    <a class="wc_goto" href="#slide{{$boss->order - 1}}"><img
                                                src="{{asset('images/desktop/arrow_up.png')}}" alt=""></a>
                                    <span style="{{($boss->order == 1 ? 'margin-left: 4px;' : '')}}">0{{$boss->order}}</span>
                                    <a class="wc_goto" href="#slide{{$number+=1}}"><img
                                                src="{{asset('images/desktop/arrow_down.png')}}" alt=""></a>
                                </div>
                                <div class="tagline">
                                    <img src="images/desktop/line.png" alt="">
                                    <p>{{$boss->subtitle}}</p>
                                </div>
                                <h1 class="title" data-animation="flip">{{$boss->title}}</h1>
                                <a class="know" href="servicos/{{$boss->slug}}/{{$boss->id}}">Saiba mais</a>
                            </header>
                            <div class="slide_category_nav">
                                <img src="{{asset('images/desktop/line.png')}}" alt="">
                                <ul>
                                    @foreach($subCategories as $sub)
                                        @if($sub->parent == $boss->id)
                                            <li><a href="servicos/{{$sub->slug}}/{{$sub->id}}">+ {{$sub->title}}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="go_in_450 ds-none">
    @php
        $number = 1;
    @endphp
    @foreach($bossCategory as $boss)
        <div class=""><!--pluging de scroll com teclado-->
            <div id="slide{{$boss->id}}"
                 class="slides_container j-slide {{($boss->order == 1 ? 'j_logo_position' : '')}}"
                 style="background: url('images/mobile/slide{{$boss->id}}_mobile.png') center center no-repeat;">
                <div class="content"><!--1170-->
                    <div class="content800"><!--800px-->
                        <article class="slide_item">
                            <header>
                                <div class="slide_navigator">
                                    <a class="wc_goto" href="#slide{{$boss->order - 1}}"><img
                                                src="{{asset('images/desktop/arrow_up.png')}}" alt=""></a>
                                    <span style="{{($boss->order == 1 ? 'margin-left: 4px;' : '')}}">0{{$boss->order}}</span>
                                    <a class="wc_goto" href="#slide{{$number+=1}}"><img
                                                src="{{asset('images/desktop/arrow_down.png')}}" alt=""></a>
                                </div>
                                <div class="tagline">
                                    <img src="images/desktop/line.png" alt="">
                                    <p>{{$boss->subtitle}}</p>
                                </div>
                                <h1 class="title" data-animation="flip">{{$boss->title}}</h1>
                                <a class="know" href="servicos/{{$boss->slug}}/{{$boss->id}}">Saiba mais</a>
                            </header>
                            <div class="slide_category_nav">
                                <img src="{{asset('images/desktop/line.png')}}" alt="">
                                <ul>
                                    @foreach($subCategories as $sub)
                                        @if($sub->parent == $boss->id)
                                            <li><a href="servicos/{{$sub->slug}}/{{$sub->id}}">+ {{$sub->title}}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>


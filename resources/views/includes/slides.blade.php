<!--A classe <"j_logo_position"> é para disparar o evento do logo-->
<div class="go_out_in_860">
    @php
    $number = 1;
    @endphp
    @foreach($bossCategory as $boss)
        <div id="slide{{$boss->id}}" class="slides_container j-slide {{($boss->order == 1 ? 'j_logo_position' : '')}}"
             style="background: url('images/desktop/slide_{{$boss->id}}.jpg') center center no-repeat;">
            <div class="content"><!--1170-->
                <div class="content800"><!--800px-->
                    <article class="slide_item">
                        <header>
                            <div class="slide_navigator">
                                <a class="wc_goto" href="#slide{{$boss->order - 1}}"><img src="{{asset('images/desktop/arrow_up.png')}}" alt=""></a>
                                <span style="{{($boss->order == 1 ? 'margin-left: 4px;' : '')}}">0{{$boss->order}}</span>
                                <a class="wc_goto" href="#slide{{$number+=1}}"><img src="{{asset('images/desktop/arrow_down.png')}}" alt=""></a>
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
                                        <li><a href="servicos/{{$sub->slug}}/{{$sub->id}}">+ {{$sub->title}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="go_in_860 ds-none">
    <div id="slide1" class="slides_container j-slide j_logo_position"
         style="background: url('images/mobile/slide1_mobile.png') center center no-repeat;">
        <div class="content"><!--1170-->
            <div class="content800"><!--800px-->
                <article class="slide_item">
                    <header>
                        <div class="slide_navigator">
                            <a class="wc_goto" href="#slide1"><img src="images/desktop/arrow_up.png" alt=""></a>
                            <span>01</span>
                            <a class="wc_goto" href="#slide2"><img src="images/desktop/arrow_down.png" alt=""></a>
                        </div>
                        <div class="tagline">
                            <img src="images/desktop/line.png" alt="">
                            <p>Tratamentos capilares totalmente indolores e sem cicatrizes</p>
                        </div>
                        <h1 class="title" data-animation="flip">Intradermoterapia capilar e transplante FUE</h1>
                        <a class="know" href="#">Saiba mais</a>
                    </header>
                    <div class="slide_category_nav">
                        <img src="images/desktop/line.png" alt="">
                        <ul>
                            <li><a href="">+ Transplante capilar FUE</a></li>
                            <li><a href="">+ INTRADERMOTERAPIA</a></li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <div id="slide2" class="slides_container j-slide"
         style="background: url('images/mobile/slide2_mobile.png') center center no-repeat;">
        <div class="content"><!--1170-->
            <div class="content800"><!--800px-->
                <article class="slide_item">
                    <header>
                        <div class="slide_navigator">
                            <a class="wc_goto" href="#slide1"><img src="images/desktop/arrow_up.png" alt=""></a>
                            <span>02</span>
                            <a class="wc_goto" href="#slide3"><img src="images/desktop/arrow_down.png" alt=""></a>
                        </div>
                        <div class="tagline">
                            <img src="images/desktop/line.png" alt="">
                            <p>Harmonização Facial e Corporal definitiva e minimamente invasiva</p>
                        </div>
                        <h1 class="title">Bioplastia: plástica sem cortes para realçar a beleza</h1>
                        <a class="know" href="#">Saiba mais</a>
                    </header>
                    <div class="slide_category_nav">
                        <img src="images/desktop/line.png" alt="">
                        <ul>
                            <li><a href="">+ Bioplastia: plástica sem cortes</a></li>
                            <li><a href="">+ Corporal</a></li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <div id="slide3" class="slides_container j-slide"
         style="background: url('images/mobile/slide3_mobile.png') center center no-repeat;">
        <div class="content"><!--1170-->
            <div class="content800"><!--800px-->
                <article class="slide_item">
                    <header>
                        <div class="slide_navigator">
                            <a class="wc_goto" href="#slide2"><img src="images/desktop/arrow_up.png" alt=""></a>
                            <span>03</span>
                            <a class="wc_goto" href="#slide4"><img src="images/desktop/arrow_down.png" alt=""></a>
                        </div>
                        <div class="tagline">
                            <img src="images/desktop/line.png" alt="">
                            <p>Tratamentos faciais e corporais para a sua pele</p>
                        </div>
                        <h1 class="title">Medicina estética: saúde, beleza e rejuvenescimento</h1>
                        <a class="know" href="#">Saiba mais</a>
                    </header>
                    <div class="slide_category_nav">
                        <img src="images/desktop/line.png" alt="">
                        <ul>
                            <li><a href="">+ Harmonização facil: Ácido hialurônico e botox</a></li>
                            <li><a href="">+ Tratamentos faciais e corporais</a></li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>

<div class="go_in_450 ds-none">
    <div id="slide1" class="slides_container j-slide j_logo_position"
         style="background: url('images/mobile/slide1_mobile.png') center center no-repeat;">
        <div class="content"><!--1170-->
            <div class="content800"><!--800px-->
                <article class="slide_item">
                    <header>
                        <div class="slide_navigator">
                            <a class="wc_goto" href="#slide1"><img src="images/desktop/arrow_up.png" alt=""></a>
                            <span>01</span>
                            <a class="wc_goto" href="#slide2"><img src="images/desktop/arrow_down.png" alt=""></a>
                        </div>
                        <div class="tagline">
                            <img src="images/desktop/line.png" alt="">
                            <p>Tratamentos capilares totalmente indolores e sem cicatrizes</p>
                        </div>
                        <h1 class="title" data-animation="flip">Intradermoterapia capilar e transplante FUE</h1>
                        <a class="know" href="#">Saiba mais</a>
                    </header>
                    <div class="slide_category_nav">
                        <img src="images/desktop/line.png" alt="">
                        <ul>
                            <li><a href="">+ Transplante capilar FUE</a></li>
                            <li><a href="">+ INTRADERMOTERAPIA</a></li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <div id="slide2" class="slides_container j-slide"
         style="background: url('images/mobile/slide2_mobile.png') center center no-repeat;">
        <div class="content"><!--1170-->
            <div class="content800"><!--800px-->
                <article class="slide_item">
                    <header>
                        <div class="slide_navigator">
                            <a class="wc_goto" href="#slide1"><img src="images/desktop/arrow_up.png" alt=""></a>
                            <span>02</span>
                            <a class="wc_goto" href="#slide3"><img src="images/desktop/arrow_down.png" alt=""></a>
                        </div>
                        <div class="tagline">
                            <img src="images/desktop/line.png" alt="">
                            <p>Harmonização Facial e Corporal definitiva e minimamente invasiva</p>
                        </div>
                        <h1 class="title">Bioplastia: plástica sem cortes para realçar a beleza</h1>
                        <a class="know" href="#">Saiba mais</a>
                    </header>
                    <div class="slide_category_nav">
                        <img src="images/desktop/line.png" alt="">
                        <ul>
                            <li><a href="">+ Bioplastia: plástica sem cortes</a></li>
                            <li><a href="">+ Corporal</a></li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <div id="slide3" class="slides_container j-slide"
         style="background: url('images/mobile/slide3_mobile.png') center center no-repeat;">
        <div class="content"><!--1170-->
            <div class="content800"><!--800px-->
                <article class="slide_item">
                    <header>
                        <div class="slide_navigator">
                            <a class="wc_goto" href="#slide2"><img src="images/desktop/arrow_up.png" alt=""></a>
                            <span>03</span>
                            <a class="wc_goto" href="#slide4"><img src="images/desktop/arrow_down.png" alt=""></a>
                        </div>
                        <div class="tagline">
                            <img src="images/desktop/line.png" alt="">
                            <p>Tratamentos faciais e corporais para a sua pele</p>
                        </div>
                        <h1 class="title">Medicina estética: saúde, beleza e rejuvenescimento</h1>
                        <a class="know" href="#">Saiba mais</a>
                    </header>
                    <div class="slide_category_nav">
                        <img src="images/desktop/line.png" alt="">
                        <ul>
                            <li><a href="">+ Harmonização facil: Ácido hialurônico e botox</a></li>
                            <li><a href="">+ Tratamentos faciais e corporais</a></li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>


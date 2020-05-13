<div class="posts_header">
    <img src="{{asset('images/desktop/logo.png')}}" alt="">
</div>

<div class="posts_and_aside_container"><!-- 100% -->

    <aside id="topo" class="posts_aside_container"> <!-- 20% -->
        <!--DESKTOP-->
        <div class="posts_aside_content btn-mobile-go-out-1178">
            <!-- BUTTOM-->
            <div class="butt butt_sand margin60-0 j-click-btn">
                <img src="{{asset('images/desktop/btn_menu.png')}}" alt="">
                <span>Serviços</span>
            </div>

            <div class="j-click-btn-content ds-none">
                @foreach($categoriesMenu as $catMenu)
                    <h1><a style="color: var(--colorWine);"
                           href="{{url('servicos/'.$catMenu->slug.'/'.$catMenu->id)}}">{{$catMenu->title}}</a></h1>
                @endforeach

            </div>
            <!--/ BUTTOM -->

            <h1>{{$category->title}}</h1>
            <nav>
                <ul>
                    @if($subCats->count() != 0)
                        @foreach($subCats as $subCat)
                            <li class="post_active">
                                <div class="post_active_content">
                                    <img src="{{asset('images/desktop/line.png')}}" alt="">
                                    <a href="{{url('servicos/'.$subCat->slug.'/'.$subCat->id)}}">{{$subCat->title}}</a>
                                </div>
                            </li>
                            @foreach($services as $service)
                                @if($service->category_id == $subCat->id)
                                    <li class="">
                                        <img class="ds-none" src="{{asset('images/desktop/line.png')}}" alt="">
                                        <a href="{{url('servico/'.$service->slug)}}">+ {{$service->title}}</a>
                                    </li>
                                @endif
                            @endforeach
                        @endforeach
                    @else
                        @foreach($services as $service)
                            @if($service->category_id == $category->id)
                                <li class="">
                                    <img class="ds-none" src="{{asset('images/desktop/line.png')}}" alt="">
                                    <a href="{{url('servico/'.$service->slug)}}">+ {{$service->title}}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif

                </ul>
            </nav>
        </div>
        <!--MOBILE--->
        <div class="posts_aside_content btn-mobile-show-1178 ds-none">
            <!-- BUTTOM -->
            <div class="butt butt_sand margin60-0 j-click-btn">
                <img src="{{asset('images/desktop/btn_menu.png')}}" alt="">
                <span>Serviços</span>
            </div>

            <div class="j-click-btn-content ds-none">
                @foreach($categoriesMenu as $catMenu)
                    <h1><a style="color: var(--colorWine);"
                           href="{{url('servicos/'.$catMenu->slug.'/'.$catMenu->id)}}">{{$catMenu->title}}</a></h1>
                @endforeach
                <h1>{{$category->title}}</h1>
                <nav>
                    <ul>
                        @if($subCats->count() != 0)
                            @foreach($subCats as $subCat)
                                <li class="post_active">
                                    <div class="post_active_content">
                                        <img src="{{asset('images/desktop/line.png')}}" alt="">
                                        <a href="{{url('servicos/'.$subCat->slug.'/'.$subCat->id)}}">{{$subCat->title}}</a>
                                    </div>
                                </li>
                                @foreach($services as $service)
                                    @if($service->category_id == $subCat->id)
                                        <li class="">
                                            <img class="ds-none" src="{{asset('images/desktop/line.png')}}" alt="">
                                            <a href="{{url('servico/'.$service->slug)}}">+ {{$service->title}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            @endforeach
                        @else
                            @foreach($services as $service)
                                @if($service->category_id == $category->id)
                                    <li class="">
                                        <img class="ds-none" src="{{asset('images/desktop/line.png')}}" alt="">
                                        <a href="{{url('servico/'.$service->slug)}}">+ {{$service->title}}</a>
                                    </li>
                                @endif
                            @endforeach
                        @endif

                    </ul>
                </nav>
            </div>
            <!--/ BUTTOM -->


        </div>
    </aside>

    <div class="posts_container"><!-- 80% -->
        <?php $i = 0;?>
        <div>
        @if($serviceByCatId->count() != 0)
            <!--QUANDO É CLICADO NO LINK DA SUBCATEGORIA-->
                @foreach($serviceByCatId as $ser)
                    @if ($loop->first)
                        <div class="posts_content">
                            <div class="tagline marginTop60px">
                                <img src="{{asset('images/desktop/line.png')}}" alt="">
                                <p>{{$ser->subtitle}}</p>
                            </div>
                            <h1 class="marginTop60px">{{$ser->title}}</h1>
                            <h2 class="marginTop60px">{{$ser->headline}}</h2>
                            @if($ser->image1)
                                <div class="box_img_l marginTop60px">
                                    <img src="{{asset('storage/'.$ser->image1)}}" alt="">
                                    <span><p>{{$ser->image1desc}}</p></span>
                                </div>
                            @endif

                            <div class="marginTop60px">{!!$ser->p1!!}</div>
                            <!--DESTAQUE-->
                            @if($ser->p2)
                                <div class="box_text marginTop60px">
                                    <div>{!!$ser->p2!!}</div>
                                </div>
                            @endif

                            @if($ser->image2)
                                <div class="box_img_r marginTop60px">
                                    <img src="{{asset('storage/'.$ser->image2)}}" alt="">
                                    <span><p>{{$ser->image2desc}}</p></span>
                                </div>
                            @endif

                            <div class="marginTop60px">{!!$ser->p3!!}</div>

                            <div class="marginTop60px">{!!$ser->p4!!}</div>

                            @if($ser->video_url)
                                <div class="box_generic marginTop60px">
                                    <h1>{{$ser->video_desc}}</h1>
                                    <iframe style="width: 100%; height: 600px;" src="{!!$ser->video_url!!}"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                </div>
                            @endif
                        <!--Steps-->
                            @if($ser->step1_title)
                                <div class="box_generic marginTop60px">
                                    <h1 class="j-click-btn1">{{$ser->step1_title}}</h1>
                                    <div class="j-click-btn-content1 ds-none">
                                        <div>{!!$ser->step1_content!!}</div>
                                    </div>
                                </div>
                            @endif

                            @if($ser->step2_title)
                                <div class="box_generic">
                                    <h1 class="j-click-btn2">{{$ser->step2_title}}</h1>
                                    <div class="j-click-btn-content2 ds-none">
                                        <div>{!!$ser->step2_content!!}</div>
                                    </div>
                                </div>
                            @endif

                            @if($ser->step3_title)
                                <div class="box_generic">
                                    <h1 class="j-click-btn3">{{$ser->step3_title}}</h1>
                                    <div class="j-click-btn-content3 ds-none">
                                        <div>{!!$ser->step3_content!!}</div>
                                    </div>
                                </div>
                            @endif

                            @if($ser->step4_title)
                                <div class="box_generic">
                                    <h1 class="j-click-btn4">{{$ser->step4_title}}</h1>
                                    <div class="j-click-btn-content4 ds-none">
                                        <div>{!!$ser->step4_content!!}</div>
                                    </div>
                                </div>
                            @endif

                            @if($ser->step5_title)
                                <div class="box_generic">
                                    <h1 class="j-click-btn5">{{$ser->step5_title}}</h1>
                                    <div class="j-click-btn-content5 ds-none">
                                        <div>{!!$ser->step5_content!!}</div>
                                    </div>
                                </div>
                            @endif

                            @if($ser->step6_title)
                                <div class="box_generic">
                                    <h1 class="j-click-btn6">{{$ser->step6_title}}</h1>
                                    <div class="j-click-btn-content6 ds-none">
                                        <div>{!!$ser->step6_content!!}</div>
                                    </div>
                                </div>
                            @endif

                            @if($ser->step7_title)
                                <div class="box_generic">
                                    <h1 class="j-click-btn7">{{$ser->step7_title}}</h1>
                                    <div class="j-click-btn-content7 ds-none">
                                        <div>{!!$ser->step7_content!!}</div>
                                    </div>
                                </div>
                            @endif

                        </div>
                    @endif
                @endforeach
            @else
            <!--QUANDO É CLICADO NA CATEGORIA PRINCIPAL-->
                @if($subCats->count() != 0)
                    @foreach($subCats as $cat)
                        @if ($loop->first)
                        <!--ACHA A PRIMEIRA SUB CATEGORIA DA PRINCIPAL-->
                            @foreach($services as $service)
                                @if($service->category_id == $cat->id)
                                <!--MOSTRA O PRIMEIRO SERVIÇO REFERENTE A SUBCATEGORIA ACIMA -->
                                    <?php $e = $i++; ?>
                                    <div class="posts_content {{$e}}"
                                         style="{{($e!=0 ? 'display:none!important;' : '')}}">
                                        <div class="tagline marginTop60px">
                                            <img src="{{asset('images/desktop/line.png')}}" alt="">
                                            <p>{{$service->subtitle}}</p>
                                        </div>
                                        <h1 class="marginTop60px">{{$service->title}}</h1>
                                        <h2 class="marginTop60px">{{$service->headline}}</h2>
                                        @if($service->image1)
                                            <div class="box_img_l marginTop60px">
                                                <img src="{{asset('storage/'.$service->image1)}}" alt="">
                                                <span><p>{{$service->image1desc}}</p></span>
                                            </div>
                                        @endif
                                        <div class="marginTop60px">{!!$service->p1!!}</div>

                                        @if($service->p2)
                                            <div class="box_text marginTop60px">
                                                <div>{!!$service->p2!!}</div>
                                            </div>
                                        @endif

                                        @if($service->image2)
                                            <div class="box_img_r marginTop60px">
                                                <img src="{{asset('storage/'.$service->image2)}}" alt="">
                                                <span><p>{{$service->image2desc}}</p></span>
                                            </div>
                                        @endif

                                        <div class="marginTop60px">{!!$service->p3!!}</div>

                                        <div class="marginTop60px">{!!$service->p4!!}</div>

                                        @if($service->video_url)
                                            <div class="box_generic marginTop60px">
                                                <h1>{{$service->video_desc}}</h1>
                                                <iframe style="width: 100%; height: 600px;"
                                                        src="{!!$service->video_url!!}"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                            </div>
                                        @endif

                                        @if($service->step1_title)
                                            <div class="box_generic marginTop60px">
                                                <h1 class="j-click-btn1">{{$service->step1_title}}</h1>
                                                <div class="j-click-btn-content1 ds-none">
                                                    <div>{!!$service->step1_content!!}</div>
                                                </div>
                                            </div>
                                        @endif

                                        @if($service->step2_title)
                                            <div class="box_generic">
                                                <h1 class="j-click-btn2">{{$service->step2_title}}</h1>
                                                <div class="j-click-btn-content2 ds-none">
                                                    <div>{!!$service->step2_content!!}</div>
                                                </div>
                                            </div>
                                        @endif

                                        @if($service->step3_title)
                                            <div class="box_generic">
                                                <h1 class="j-click-btn3">{{$service->step3_title}}</h1>
                                                <div class="j-click-btn-content3 ds-none">
                                                    <div>{!!$service->step3_content!!}</div>
                                                </div>
                                            </div>
                                        @endif

                                        @if($service->step4_title)
                                            <div class="box_generic">
                                                <h1 class="j-click-btn4">{{$service->step4_title}}</h1>
                                                <div class="j-click-btn-content4 ds-none">
                                                    <div>{!!$service->step4_content!!}</div>
                                                </div>
                                            </div>
                                        @endif

                                        @if($service->step5_title)
                                            <div class="box_generic">
                                                <h1 class="j-click-btn5">{{$service->step5_title}}</h1>
                                                <div class="j-click-btn-content5 ds-none">
                                                    <div>{!!$service->step5_content!!}</div>
                                                </div>
                                            </div>
                                        @endif

                                        @if($service->step6_title)
                                            <div class="box_generic">
                                                <h1 class="j-click-btn6">{{$service->step6_title}}</h1>
                                                <div class="j-click-btn-content6 ds-none">
                                                    <div>{!!$service->step6_content!!}</div>
                                                </div>
                                            </div>
                                        @endif

                                        @if($service->step7_title)
                                            <div class="box_generic">
                                                <h1 class="j-click-btn7">{{$service->step7_title}}</h1>
                                                <div class="j-click-btn-content7 ds-none">
                                                    <div>{!!$service->step7_content!!}</div>
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @else
                    <div class="posts_content">
                        <h1 class="marginTop60px">: (</h1>
                        <p style="margin-top: 60px;"><b>ATENÇÃO: </b>A categoria principal <b>{{$category->title}}</b>
                            não possui nenhuma sub categoria
                            registrada.
                            Cadastre uma e lembre-se de cadastrar um serviço
                            referente a essa mesma sub categoria.</p>
                    </div>
                @endif
            @endif
        </div>
        <!--/TESTES-->
    </div>
</div>
<!--BOTAO DE TOPO E HELPER SERVIÇOS-->
<!--TOPO HELPER -->
<aside class="posts_aside_container" style="background: #ffffff;"> <!-- 20% -->
    <div class="posts_aside_content btn-mobile-show-1178 ds-none">
        <a class="wc_goto" href="#topo">
            <div class="butt butt_sand margin60-0">
                <img src="{{asset('images/desktop/arrow_up.png')}}" alt="">
                <span>Topo</span>
            </div>
        </a>
    </div>
    <!--SERVIÇOS HELPER--->
    <div class="posts_aside_content btn-mobile-show-1178 ds-none">
        <div class="butt butt_sand margin60-0 j-click-btn8">
            <img src="{{asset('images/desktop/btn_menu.png')}}" alt="">
            <span>Serviços</span>
        </div>
        <div class="j-click-btn-content8 ds-none">
            @foreach($categoriesMenu as $catMenu)
                <h1><a style="color: var(--colorWine);"
                       href="{{url('servicos/'.$catMenu->slug.'/'.$catMenu->id)}}">{{$catMenu->title}}</a></h1>
            @endforeach
            <h1>{{$category->title}}</h1>
            <nav>
                <ul>
                    @if($subCats->count() != 0)
                        @foreach($subCats as $subCat)
                            <li class="post_active">
                                <div class="post_active_content">
                                    <img src="{{asset('images/desktop/line.png')}}" alt="">
                                    <a href="{{url('servicos/'.$subCat->slug.'/'.$subCat->id)}}">{{$subCat->title}}</a>
                                </div>
                            </li>
                            @foreach($services as $service)
                                @if($service->category_id == $subCat->id)
                                    <li class="">
                                        <img class="ds-none" src="{{asset('images/desktop/line.png')}}" alt="">
                                        <a href="{{url('servico/'.$service->slug)}}">+ {{$service->title}}</a>
                                    </li>
                                @endif
                            @endforeach
                        @endforeach
                    @else
                        @foreach($services as $service)
                            @if($service->category_id == $category->id)
                                <li class="">
                                    <img class="ds-none" src="{{asset('images/desktop/line.png')}}" alt="">
                                    <a href="{{url('servico/'.$service->slug)}}">+ {{$service->title}}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif

                </ul>
            </nav>
        </div>
    </div>
</aside>
<!--BOTAO DE TOPO E HELPER SERVIÇOS-->
</div>

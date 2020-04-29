<div class="posts_header">
    <img src="{{asset('images/desktop/logo.png')}}" alt="">
</div>

<div class="posts_and_aside_container"><!-- 100% -->

    <aside class="posts_aside_container"> <!-- 20% -->

        <div class="posts_aside_content">
            <!-- BUTTOM -->
            <div class="butt butt_sand margin60-0 j-click-btn">
                <img src="{{asset('images/desktop/btn_menu.png')}}" alt="">
                <span>Serviços</span>
            </div>
            <div class="j-click-btn-content ds-none">
                @foreach($categoriesMenu as $catMenu)
                    <p><a href="{{url('servicos/'.$catMenu->slug.'/'.$catMenu->id)}}">{{$catMenu->title}}</a></p>
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

    </aside>

    <div class="posts_container"><!-- 80% -->

        <!--TESTES-->
        <?php $i = 0;?>
        <div>
        @if($serviceByCatId->count() != 0)
            <!--QUANDO É CLICADO NO LINK DA SUBCATEGORIA-->
                @foreach($serviceByCatId as $ser)
                    <div class="posts_content">
                        <div class="tagline marginTop60px">
                            <img src="{{asset('images/desktop/line.png')}}" alt="">
                            <p>{{$ser->subtitle}}</p>
                        </div>
                        <h1 class="marginTop60px">{{$ser->title}}</h1>
                        <h2 class="marginTop60px">{{$ser->headline}}</h2>
                        <p class="marginTop60px">{{$ser->p1}}</p>

                        @if($ser->image1)
                            <div class="box_img_l marginTop60px">
                                <img src="{{asset('storage/'.$ser->image1)}}" alt="">
                                <span><p>{{$ser->image1desc}}</p></span>
                            </div>
                        @endif

                        <div class="box_text marginTop60px">
                            <p>{{$ser->p2}}</p>
                        </div>

                        @if($ser->image2)
                            <div class="box_img_r marginTop60px">
                                <img src="{{asset('storage/'.$ser->image2)}}" alt="">
                                <span><p>{{$ser->image2desc}}</p></span>
                            </div>
                        @endif

                        <p class="marginTop60px">{{$ser->p3}}</p>

                        <p class="marginTop60px">{{$ser->p4}}</p>

                        @if($ser->video_url)
                            <div class="box_generic marginTop60px">
                                <h1>{{$ser->video_desc}}</h1>
                                <img src="{{asset('images/desktop/service/full.jpg')}}" alt="">
                            </div>
                        @endif

                        @if($service->step1_title)
                            <div class="box_generic marginTop60px">
                                <h1 class="j-click-btn">{{$service->step1_title}}</h1>
                                <div class="j-click-btn-content ds-none">
                                    <p>{{$service->step1_content}}</p>
                                </div>
                            </div>
                        @endif

                        @if($service->step2_title)
                            <div class="box_generic">
                                <h1 class="j-click-btn1">{{$service->step2_title}}</h1>
                                <div class="j-click-btn-content1 ds-none">
                                    <p>{{$service->step2_content}}</p>
                                </div>
                            </div>
                        @endif

                        @if($service->step3_title)
                            <div class="box_generic">
                                <h1 class="j-click-btn2">{{$service->step3_title}}</h1>
                                <div class="j-click-btn-content2 ds-none">
                                    <p>{{$service->step3_content}}</p>
                                </div>
                            </div>
                        @endif

                        @if($service->step4_title)
                            <div class="box_generic">
                                <h1 class="j-click-btn3">{{$service->step4_title}}</h1>
                                <div class="j-click-btn-content3 ds-none">
                                    <p>{{$service->step4_content}}</p>
                                </div>
                            </div>
                        @endif

                        @if($service->step5_title)
                            <div class="box_generic">
                                <h1 class="j-click-btn4">{{$service->step5_title}}</h1>
                                <div class="j-click-btn-content4 ds-none">
                                    <p>{{$service->step5_content}}</p>
                                </div>
                            </div>
                        @endif

                        @if($service->step6_title)
                            <div class="box_generic">
                                <h1 class="j-click-btn5">{{$service->step6_title}}</h1>
                                <div class="j-click-btn-content5 ds-none">
                                    <p>{{$service->step6_content}}</p>
                                </div>
                            </div>
                        @endif

                        @if($service->step7_title)
                            <div class="box_generic">
                                <h1 class="j-click-btn6">{{$service->step7_title}}</h1>
                                <div class="j-click-btn-content6 ds-none">
                                    <p>{{$service->step7_content}}</p>
                                </div>
                            </div>
                        @endif

                    </div>
                @endforeach
            @else
            <!--QUANDO É CLICADO NO LINK DA CATEGORIA PRINCIPAL-->
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
                                        <p class="marginTop60px">{{$service->p1}}</p>

                                        @if($service->image1)
                                            <div class="box_img_l marginTop60px">
                                                <img src="{{asset('storage/'.$service->image1)}}" alt="">
                                                <span><p>{{$service->image1desc}}</p></span>
                                            </div>
                                        @endif

                                        <div class="box_text marginTop60px">
                                            <p>{{$service->p2}}</p>
                                        </div>

                                        @if($service->image2)
                                            <div class="box_img_r marginTop60px">
                                                <img src="{{asset('storage/'.$service->image2)}}" alt="">
                                                <span><p>{{$service->image2desc}}</p></span>
                                            </div>
                                        @endif

                                        <p class="marginTop60px">{{$service->p3}}</p>

                                        <p class="marginTop60px">{{$service->p4}}</p>

                                        @if($service->video_url)
                                            <div class="box_generic marginTop60px">
                                                <h1>{{$service->video_desc}}</h1>
                                                <img src="{{asset('images/desktop/service/full.jpg')}}" alt="">
                                            </div>
                                        @endif

                                        @if($service->step1_title)
                                            <div class="box_generic marginTop60px">
                                                <h1 class="j-click-btn">{{$service->step1_title}}</h1>
                                                <div class="j-click-btn-content">
                                                    <p>{{$service->step1_content}}</p>
                                                </div>
                                            </div>
                                        @endif

                                        @if($service->step2_title)
                                            <div class="box_generic marginTop60px">
                                                <h1 class="j-click-btn">{{$service->step2_title}}</h1>
                                                <div class="j-click-btn-content">
                                                    <p>{{$service->step2_content}}</p>
                                                </div>
                                            </div>
                                        @endif

                                        @if($service->step3_title)
                                            <div class="box_generic marginTop60px">
                                                <h1 class="j-click-btn">{{$service->step3_title}}</h1>
                                                <div class="j-click-btn-content">
                                                    <p>{{$service->step3_content}}</p>
                                                </div>
                                            </div>
                                        @endif

                                        @if($service->step4_title)
                                            <div class="box_generic marginTop60px">
                                                <h1 class="j-click-btn">{{$service->step4_title}}</h1>
                                                <div class="j-click-btn-content">
                                                    <p>{{$service->step4_content}}</p>
                                                </div>
                                            </div>
                                        @endif

                                        @if($service->step5_title)
                                            <div class="box_generic marginTop60px">
                                                <h1 class="j-click-btn">{{$service->step5_title}}</h1>
                                                <div class="j-click-btn-content">
                                                    <p>{{$service->step5_content}}</p>
                                                </div>
                                            </div>
                                        @endif

                                        @if($service->step6_title)
                                            <div class="box_generic marginTop60px">
                                                <h1 class="j-click-btn">{{$service->step6_title}}</h1>
                                                <div class="j-click-btn-content">
                                                    <p>{{$service->step6_content}}</p>
                                                </div>
                                            </div>
                                        @endif

                                        @if($service->step7_title)
                                            <div class="box_generic marginTop60px">
                                                <h1 class="j-click-btn">{{$service->step7_title}}</h1>
                                                <div class="j-click-btn-content">
                                                    <p>{{$service->step7_content}}</p>
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @else
                    <p>A categoria principal <b>{{$category->title}}</b> não possui nenhuma sub categoria registrada.
                        Cadastre uma e lembre também de cadastrar um serviço
                        referente a essa mesma sub categoria.</p>
                @endif
            @endif
        </div>
        <!--/TESTES-->

    </div>
</div>



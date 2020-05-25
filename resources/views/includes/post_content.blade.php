<div class="posts_header">
    <a href="{{url('/')}}"><img src="{{asset('images/desktop/logo.png')}}" alt=""></a>
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
                           href="{{url('servicos/'.$catMenu->slug.'/'.$catMenu->id)}}">{{$catMenu->menu_name}}</a></h1>
                @endforeach

            </div>
            <!--/ BUTTOM -->

            <h1>{{$category->menu_name}}</h1>
            <nav>
                <ul>
                    @if($subCats->count() != 0)
                        @foreach($subCats as $subCat)
                            <li class="post_active">
                                <div class="post_active_content">
                                    <a href="{{url('servicos/'.$subCat->slug.'/'.$subCat->id)}}"><h2>
                                            + {{$subCat->menu_name}}</h2></a>
                                </div>
                            </li>
                            @foreach($services as $service)
                                @if($service->category_id == $subCat->id)
                                    <li class="">
                                        <div style="margin-left: 30px;">
                                            <a href="{{url('servico/'.$service->slug)}}">+ {{($service->menu_name == '' ? $service->title : $service->menu_name)}}</a>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        @endforeach
                    @else
                        @foreach($services as $service)
                            @if($service->category_id == $category->id)
                                <li class="">
                                    <div style="margin-left: 30px;">
                                        <a href="{{url('servico/'.$service->slug)}}">+ {{($service->menu_name == '' ? $service->title : $service->menu_name)}}</a>
                                    </div>
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
                                        <a href="{{url('servicos/'.$subCat->slug.'/'.$subCat->id)}}"><h2>
                                                + {{$subCat->menu_name}}</h2></a>
                                    </div>
                                </li>
                                @foreach($services as $service)
                                    @if($service->category_id == $subCat->id)
                                        <li class="">
                                            <div style="margin-left: 30px;">
                                                <a href="{{url('servico/'.$service->slug)}}">+ {{($service->menu_name == '' ? $service->title : $service->menu_name)}}</a>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            @endforeach
                        @else
                            @foreach($services as $service)
                                @if($service->category_id == $category->id)
                                    <li class="">
                                        <div style="margin-left: 30px;">
                                            <a href="{{url('servico/'.$service->slug)}}">+ {{($service->menu_name == '' ? $service->title : $service->menu_name)}}</a>
                                        </div>
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
        <div class="posts_content">
            <div class="tagline marginTop60px">
                <img src="{{asset('images/desktop/line.png')}}" alt="">
                <p>{{$category->subtitle}}</p>
            </div>
            <h1 class="marginTop60px">{{$category->title}}</h1>
            <h2 class="marginTop60px">{{$category->headline}}</h2>
            @if($category->image1)
                <div class="box_img_l marginTop60px">
                    <img src="{{asset('storage/app/public/'.$category->image1)}}" alt="">
                    <span><p>{{$category->image1desc}}</p></span>
                </div>
            @endif

            <div class="marginTop60px mce_frontend">{!!$category->p1!!}</div>
            <!--DESTQUE-->
            @if($category->p2)
                <div class="box_text marginTop60px">
                    <div>{!!$category->p2!!}</div>
                </div>
            @endif

            @if($category->image2)
                <div class="box_img_r marginTop60px">
                    <img src="{{asset('storage/app/public/'.$category->image2)}}" alt="">
                    <span><p>{{$category->image2desc}}</p></span>
                </div>
            @endif
            <div class="marginTop60px mce_frontend">{!!$category->p3!!}</div>
            <div class="marginTop60px mce_frontend">{!!$category->p4!!}</div>
            @if($category->video_url)
                <div class="box_generic marginTop60px">
                    <h1>{{$category->video_desc}}</h1>
                    <iframe style="width: 100%; height: 600px;" src="{!!$category->video_url!!}"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            @endif
            @if($category->step1_title)
                <div class="box_generic marginTop60px">
                    <h1 class="j-click-btn1">+ {{$category->step1_title}}</h1>
                    <div class="j-click-btn-content1 ds-none">
                        <div>{!!$category->step1_content!!}</div>
                    </div>
                </div>
            @endif
            @if($category->step2_title)
                <div class="box_generic">
                    <h1 class="j-click-btn2">+ {{$category->step2_title}}</h1>
                    <div class="j-click-btn-content2 ds-none">
                        <div class="mce_frontend">{!!$category->step2_content!!}</div>
                    </div>
                </div>
            @endif
            @if($category->step3_title)
                <div class="box_generic">
                    <h1 class="j-click-btn3">+ {{$category->step3_title}}</h1>
                    <div class="j-click-btn-content3 ds-none">
                        <div class="mce_frontend">{!!$category->step3_content!!}</div>
                    </div>
                </div>
            @endif
            @if($category->step4_title)
                <div class="box_generic">
                    <h1 class="j-click-btn4">+ {{$category->step4_title}}</h1>
                    <div class="j-click-btn-content4 ds-none">
                        <div class="mce_frontend">{!!$category->step4_content!!}</div>
                    </div>
                </div>
            @endif
            @if($category->step5_title)
                <div class="box_generic">
                    <h1 class="j-click-btn5">+ {{$category->step5_title}}</h1>
                    <div class="j-click-btn-content5 ds-none">
                        <div class="mce_frontend">{!!$category->step5_content!!}</div>
                    </div>
                </div>
            @endif
            @if($category->step6_title)
                <div class="box_generic">
                    <h1 class="j-click-btn6">+ {{$category->step6_title}}</h1>
                    <div class="j-click-btn-content6 ds-none">
                        <div class="mce_frontend">{!!$category->step6_content!!}</div>
                    </div>
                </div>
            @endif
            @if($category->step7_title)
                <div class="box_generic">
                    <h1 class="j-click-btn7">+ {{$category->step7_title}}</h1>
                    <div class="j-click-btn-content7 ds-none">
                        <div class="mce_frontend">{!!$category->step7_content!!}</div>
                    </div>
                </div>
            @endif
            <div class="services-post-go-out-1178" style="width: 100%;">
                <div style="display: flex; align-items: center; justify-content: flex-start; width: 100%;">
                    <div style="width: 50%;">
                        <a class="wc_goto" href="#topo">
                            <div class="butt butt_sand margin60-0">
                                <img src="{{asset('images/desktop/arrow_up.png')}}" alt="">
                                <span>Voltar ao topo</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<!--HELPERs -->
<aside class="posts_aside_container" style="background: #ffffff;"> <!-- 20% -->
    <!--TOPO HELPER-->
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
        </div>
    </div>
</aside>
<!-- END HELPERs-->




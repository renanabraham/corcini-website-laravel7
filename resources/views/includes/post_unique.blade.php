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
            </div>
            <!--/ BUTTOM -->
        </div>
    </aside>
    <div class="posts_container"><!-- 80% -->
        <div class="posts_content">
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
            <!--DESTQUE-->
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
            <p class="marginTop60px">{!!$service->p3!!}</p>
            <p class="marginTop60px">{!!$service->p4!!}</p>
            @if($service->video_url)
                <div class="box_generic marginTop60px">
                    <h1>{{$service->video_desc}}</h1>
                    <iframe style="width: 100%; height: 600px;" src="{!!$service->video_url!!}"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            @endif
            @if($service->step1_title)
                <div class="box_generic marginTop60px">
                    <h1 class="j-click-btn1">+ {{$service->step1_title}}</h1>
                    <div class="j-click-btn-content1 ds-none">
                        <div>{!!$service->step1_content!!}</div>
                    </div>
                </div>
            @endif
            @if($service->step2_title)
                <div class="box_generic">
                    <h1 class="j-click-btn2">+ {{$service->step2_title}}</h1>
                    <div class="j-click-btn-content2 ds-none">
                        <div>{!!$service->step2_content!!}</div>
                    </div>
                </div>
            @endif
            @if($service->step3_title)
                <div class="box_generic">
                    <h1 class="j-click-btn3">+ {{$service->step3_title}}</h1>
                    <div class="j-click-btn-content3 ds-none">
                        <div>{!!$service->step3_content!!}</div>
                    </div>
                </div>
            @endif
            @if($service->step4_title)
                <div class="box_generic">
                    <h1 class="j-click-btn4">+ {{$service->step4_title}}</h1>
                    <div class="j-click-btn-content4 ds-none">
                        <div>{!!$service->step4_content!!}</div>
                    </div>
                </div>
            @endif
            @if($service->step5_title)
                <div class="box_generic">
                    <h1 class="j-click-btn5">+ {{$service->step5_title}}</h1>
                    <div class="j-click-btn-content5 ds-none">
                        <div>{!!$service->step5_content!!}</div>
                    </div>
                </div>
            @endif
            @if($service->step6_title)
                <div class="box_generic">
                    <h1 class="j-click-btn6">+ {{$service->step6_title}}</h1>
                    <div class="j-click-btn-content6 ds-none">
                        <div>{!!$service->step6_content!!}</div>
                    </div>
                </div>
            @endif
            @if($service->step7_title)
                <div class="box_generic">
                    <h1 class="j-click-btn7">+ {{$service->step7_title}}</h1>
                    <div class="j-click-btn-content7 ds-none">
                        <div>{!!$service->step7_content!!}</div>
                    </div>
                </div>
            @endif
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




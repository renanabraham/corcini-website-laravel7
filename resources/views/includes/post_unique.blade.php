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
            <h1>{{$superCat->title}}</h1>
            <nav>
                <ul>

                    <li class="post_active">
                        <div class="post_active_content">
                            <img src="{{asset('images/desktop/line.png')}}" alt="">
                            <a href="{{url('servicos/'.$category->slug.'/'.$category->id)}}">{{$category->title}}</a>
                        </div>
                    </li>

                </ul>
            </nav>
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

    </div>

</div>




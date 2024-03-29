<div class="about_header">
    <a href="{{url('/')}}"><img src="{{asset('images/desktop/logo.png')}}" alt=""></a>
</div>

<div class="about_pics">
    <div class="item"><img src="{{asset('images/desktop/about/1.jpg')}}" alt=""></div>
    <div class="item"><img src="{{asset('images/desktop/about/2.jpg')}}" alt=""></div>
    <div class="item"><img src="{{asset('images/desktop/about/3.jpg')}}" alt=""></div>
    <div class="item"><img src="{{asset('images/desktop/about/4.jpg')}}" alt=""></div>
</div>

<section class="about_content">
    <div class="content">
        <div class="content971">
            <header>
                <div>
                    <img src="{{asset('images/desktop/line.png')}}" alt="">
                    <p>{{$profile->subtitle}}</p>
                </div>
                <h1 class="color-sand">{{$profile->title}}</h1>

                @if($profile->headline)
                    <p>{{$profile->headline}}</p>
                @endif

            </header>
            @if($profile->p1)
                <p style="margin-bottom: 30px;">{{$profile->p1}}</p>
            @endif

            @if($profile->p2)
                <p style="margin-bottom: 30px;">{{$profile->p2}}</p>
            @endif

            @if($profile->p3)
                <p style="margin-bottom: 30px;">{{$profile->p3}}</p>
            @endif

        </div>
    </div>
</section>

<section class="position-relative just-in-desktop">
    <div class="left_div">
        <div class="left_div_content">
            <div class="line"></div>
            <p>{{$profile->p4}}</p>
            <div class="left_div_footer">
                <img style="margin-top: 10px; margin-right: 10px;" src="{{asset('images/desktop/line.png')}}"
                     alt="">
                <p>Dra. Ana Cecília Corcini<br><span style="color: #d3bc8d;">CRM 38929</span></p>
            </div>
        </div>
    </div>
    <div class="content" style="justify-content: flex-end;">
        <img class="dra_img" src="{{asset('images/desktop/about/ana_corcini.jpg')}}" alt="">
    </div>
</section>

<section class="jjj just-in-mobile ds-none">
    <div class="new_about">
        <div class="line"></div>
        <p>{{$profile->p4}}</p>
        <div class="left_div_footer">
            <img src="{{asset('images/desktop/line.png')}}" alt="">
            <p>Dra. Ana Cecília Corcini<br><span style="color: #d3bc8d;">CRM 38929</span></p>
        </div>
    </div>

    <div class="new_about_img">
        <img class="dra_img" src="{{asset('images/desktop/about/ana_corcini.jpg')}}" alt="">
    </div>
</section>


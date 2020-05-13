@php
    $cat1 = "images/desktop/service/category1_banner.png";
    $cat2 = "images/desktop/service/category2_banner.png";
    $cat3= "images/desktop/service/category3_banner.png";
@endphp
@if($category->id ===1)
    @php
        $banner = $cat1
    @endphp
@endif
@if($category->id ===2)
    @php
        $banner = $cat3
    @endphp
@endif
@if($category->id ===3)
    @php
        $banner = $cat3
    @endphp
@endif
<div class="contact_container position-relative"
     style="background: url('{{asset($banner)}}') center center no-repeat;">
    <div class="flex20"></div>
    <div class="flex80">
        <img class="logo_no_text" src="{{asset('images/desktop/logo_no_text.png')}}" alt="">
        <div class="posts_content">
            <h1 class="title" style="color:#5c4e63 !important;">Interessou-se?<br/>Agende seu horário</h1>
            <div class="tagline">
                <img src="{{asset('images/desktop/line.png')}}" alt="">
                <p style="color: #ffffff !important;">Entre em contato através do botão abaixo</p>
            </div>

            <div class="btn_content">
                <a href="" class="btn_contact" style="background: #5c4e63 !important;">
                    <img src="{{asset('images/desktop/icon_whatsapp.png')}}" alt="">
                    <p>Enviar Whatsapp<br/><span style="color: #d3bc8d !important;">51 981017323</span></p>
                </a>
            </div>
        </div>
    </div>
</div>

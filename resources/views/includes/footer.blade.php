<footer class="footer_container">
    <section class="content800">

        <header>
            <h1 class="title">Interessou-se?<br/>
                Agende seu horário</h1>
            <div class="tagline">
                <img src="images/desktop/line.png" alt="">
                <p>Escolha a melhor localização para ser atendido</p>
            </div>
        </header>

        <div class="addr_content">
            @foreach($addrs as $addr)
                <article class="addr_item">
                    <header>
                        <img src="{{url("storage/app/public/".$addr->photo)}}" alt="">
                        <h1>{{$addr->city}}</h1>
                        <div class="underline"></div>
                        <p>{{$addr->addr}}</p>
                    </header>
                    <div class="tel ds-flex a-i-center">
                        <img class="mr-18" src="images/desktop/icon_whatsapp.png" alt="" width="35">
                        <span class="">{{$addr->whatsapp}}</span>
                    </div>
                    <div class="tel ds-flex a-i-center">
                        <img class="mr-18" src="images/desktop/icon_phone.png" alt="" width="35">
                        <span class="">{{$addr->phone}}</span>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
</footer>

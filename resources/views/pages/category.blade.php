@extends('master.master')
@php
    $menuColor = "wine";
    $title = "Servicos";
@endphp
@section('title', $category->title)

@section('content')
    @include('includes.header')
    @include('includes.social_fixed_yellow')

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
                    ...
                </div>
                <!--/ BUTTOM -->
                <h1>{{$category->title}}</h1>
                <nav>
                    <ul>
                        @foreach($subCategories as $sub)
                            @if($sub->parent == $category->id)
                                <li class="post_active">
                                    <div class="post_active_content">
                                        <img class="" src="{{asset('images/desktop/line.png')}}" alt="">
                                        <a href="/servicos/{{$sub->slug}}">{{$sub->title}}</a>
                                    </div>
                                </li>
                            @endif
                        @endforeach

                        @foreach($servicesAll as $servicesAllItem)
                            @if($servicesAllItem->category == $category->id)
                                <li class="">
                                    <img class="ds-none" src="{{asset('images/desktop/line.png')}}" alt="">
                                    <a href="{{url('servico')}}/{{$servicesAllItem->slug}}">+ {{$servicesAllItem->title}}</a>
                                </li>
                            @else

                            @endif
                        @endforeach

                        <li class="">
                            <img class="ds-none" src="{{asset('images/desktop/line.png')}}" alt="">
                            <a href="">+ Sobrancelha</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </aside>

        <div class="posts_container"><!-- 80% -->

            @foreach($services as $service)

                @if($service->category == $service->category)

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

                    <!--GENERICOS
                        <div class="box_generic">
                            <h1>Etapa 2: Etapa Cirúrgica de implantação dos fios</h1>
                            <p>Ao chegar na Clínica, o paciente é recebido pela Dra. Corcini, onde realiza um exame
                                físico,
                                seus
                                exames de imagem e de laboratório solicitados previamente para o pré-operatório são
                                analisados,
                                seus
                                sinais vitais são verificados e ele é encaminhado para a sala do pré-operatório,
                                onde
                                irá se
                                iniciar
                                a raspagem total do cabelo para os homens, e parcial para as mulheres. Nas mulheres,
                                a
                                raspagem
                                é
                                feita somente na região posterior da cabeça, e a região não será visualizada após o
                                transplante
                                pois
                                o cabelo de cima irá cobrir a zona raspada.</p>

                            <p>Com isso, a Dra. Corcini inicia as marcações na região da calvície, com uma visão
                                estética
                                apurada
                                para manter o desenho de forma natural, cobrindo as entradas, diminuindo a fronte e
                                mantendo
                                as
                                características desejadas. Após a marcação, iniciam-se os bloqueios com anestesia
                                local
                                da
                                área,
                                onde o paciente estará sob monitoramento durante todo o período do procedimento.</p>

                            <p>A extração dos folículos é realizada na parte posterior da cabeça, onde não há
                                influência
                                hormonal e
                                os pelos são sadios. Com um instrumental cirúrgico, denominado “punch”, o qual
                                possui
                                uma
                                micro
                                lâmina circular, é realizada a extração das unidades foliculares uma a uma, sempre
                                com o
                                cuidado
                                de
                                manter um distanciamento adequado entre os fios, para não gerar cicatriz na área da
                                captação.
                                Todo o
                                processo da primeira etapa cirúrgica demora cerca de 4 horas. Após, o paciente se
                                alimenta
                                com
                                um
                                lanche leve e é dado início à segunda etapa, referente à implantação dos fios.
                            </p>
                        </div>

                        <div class="box_generic marginTop60px">
                            <h1>Após o Procedimento</h1>
                            <p>Após a segunda etapa cirúrgica, os curativos são realizados apenas na região
                                posterior da
                                cabeça
                                onde
                                foram captados os fios. O paciente deverá mantê-los por 24h. O paciente retornará
                                para a
                                casa
                                com um
                                acompanhante, pois, devido o tempo cirúrgico, poderá apresentar uma leve vertigem.
                                No
                                dia
                                seguinte,
                                o paciente não sentirá dor, mas deverá manter o repouso por 48h, para que não haja o
                                risco
                                de
                                bater
                                a cabeça e retirar os fios implantados.</p>

                            <p>As revisões no pós procedimento serão realizadas de acordo com os seguintes períodos:
                                3
                                dias
                                após
                                o
                                procedimento, 15 dias após, 30 dias após e uma visita mensal para acompanhamento da
                                Dra.
                                Corcini. O
                                uso de medicamentos posterior será essencial para otimizar o resultado.
                            </p>
                        </div>

                        <div class="box_generic marginTop60px">
                            <h1>Resultado</h1>
                            <p>Após 1 mês do transplante, os fios implantados começarão a quebrar e cair, e ali
                                existe a
                                sensação de
                                que o procedimento deu errado. Mas fique calmo, estará tudo certo. Após um período
                                médio
                                de
                                3
                                meses,
                                os fios que realmente ficarão no paciente iniciam seu crescimento em um processo que
                                dura
                                cerca
                                de
                                24 meses, quando poderá ser visualizado o resultado final do transplante. </p>
                        </div>
                        -->

                    </div>
                @else
                    <p>Nada!</p>
                @endif
            @endforeach

        </div>

    </div>

    @include('includes.contact')
    @include('includes.services')
@endsection

@extends('layouts.app')

@section('content')
    <div class="container shadow p-3 mb-5 bg-white rounded">

        @foreach($errors->all() as $message)
            <div class="alert alert-danger" role="alert">
                <b>*error:</b> {{$message}}
            </div>
        @endforeach
        <div class="row">
            <div class="col"><h2>Novo Serviço!</h2></div>
        </div>

        <form action="/admin/service/store" method="post" autocomplete="off" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label><b>Categoria:</b></label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Selecione uma categoria:</label>
                    </div>
                    <select class="custom-select" name="category_id">
                        <option value="">Selecionar...</option>
                        @foreach($categories as $category)
                            <option
                                    value="{{$category->id}}" {{(old('category_id') == $category->id ? 'selected' : '')}}>{{$category->title}}
                                - {{$category->id}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label><b>Título:</b></label>
                <input class="form-control" type="text" name="title" value="{{old('title')}}">
            </div>

            <div class="form-group">
                <label><b>Subtítulo:</b></label>
                <input class="form-control" type="text" name="subtitle" value="{{old('subtitle')}}">
            </div>

            <div class="form-group">
                <label><b>Nome para ser mostrado no MENU do site:</b></label>
                <input class="form-control" name="menu_name" value="{{old('menu_name')}}">
            </div>

            <div class="form-group">
                <label><b><i>"Head Line"</i> Texto de introdução</b></label>
                <textarea class="form-control" name="headline" rows="5">{!! old('headline') !!}</textarea>
            </div>

            <div class="bg-light p-4 form-group">
                <h3>IMAGEM 1</h3><label>Imagem com posição justificada na esquerda</label>
                <p class="text-danger">
                    <b>Atenção: </b>Tamanho de 571 x 371 pxs para não estragar o layout do site!
                </p>
                <div class="form-group">
                    <input class="form-control" type="file" name="image1">
                </div>

                <div class="form-group">
                    <label>Descrição da imagem justificada na esquerda</label>
                    <textarea class="form-control" type="text" name="image1desc" rows="5">{{old('image1desc')}}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label><b>Texto 1</b></label>
                <textarea class="form-control mce" name="p1" rows="10">{!! old('p1') !!}</textarea>
            </div>

            <div class="form-group">
                <label><b>Texto Destaque</b></label>
                <textarea class="form-control mce" name="p2" rows="10">{{old('p2')}}</textarea>
            </div>

            <div class="bg-light p-4 form-group">
                <h3>IMAGEM 2</h3>
                <p class="text-danger">
                    <b>Atenção: </b>Tamanho de 571 x 371 pxs para não estragar o layout do site!
                </p>
                <div class="form-group">
                    <label>Imagem com posição justificada na direita</label>
                    <input class="form-control" type="file" name="image2">
                </div>

                <div class="form-group">
                    <label>Descrição da imagem justificada na direita</label>
                    <textarea class="form-control" type="text" name="image2desc" rows="5">{{old('image2desc')}}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label for=""><b>Texto 2</b></label>
                <textarea class="form-control mce" type="text" name="p3" rows="10">{{old('p3')}}</textarea>
            </div>

{{--            <div class="form-group">--}}
{{--                <label for=""><b>Texto 3</b></label>--}}
{{--                <textarea class="form-control" type="text" name="p4" rows="10">{{old('p4')}}</textarea>--}}
{{--            </div>--}}

            <div class="form-group">
                <label for=""><b>URL de video</b></label>
                <input class="form-control" type="text" name="video_url" value="{!!old('video_url')!!}">
            </div>

            <div class="form-group">
                <label><b>Descrição do video</b></label>
                <input class="form-control" type="text" name="video_desc" value="{{old('video_desc')}}">
            </div>

            <div class="form-group">
                <label><b>Dropdown 1</b></label>
                <input class="form-control" type="text" name="step1_title" value="{{old('step1_title')}}">
                <textarea class="form-control mce" type="text" name="step1_content"
                          rows="10">{{old('step1_content')}}</textarea>
            </div>

            <div class="form-group">
                <label for=""><b>Dropdown 2</b></label>
                <input class="form-control" type="text" name="step2_title" value="{{old('step2_title')}}">
                <textarea class="form-control mce" type="text" name="step2_content"
                          rows="10">{{old('step2_content')}}</textarea>
            </div>

            <div class="form-group">
                <label for=""><b>Dropdown 3</b></label>
                <input class="form-control" type="text" name="step3_title" value="{{old('step3_title')}}">
                <textarea class="form-control mce" type="text" name="step3_content"
                          rows="10">{{old('step3_content')}}</textarea>
            </div>

            <div class="form-group">
                <label for=""><b>Dropdown 4</b></label>
                <input class="form-control" type="text" name="step4_title" value="{{old('step4_title')}}">
                <textarea class="form-control mce" type="text" name="step4_content"
                          rows="10">{{old('step4_content')}}</textarea>
            </div>

            <div class="form-group">
                <label for=""><b>Dropdown 5</b></label>
                <input class="form-control" type="text" name="step5_title" value="{{old('step5_title')}}">
                <textarea class="form-control mce" type="text" name="step5_content"
                          rows="10">{{old('step5_content')}}</textarea>
            </div>

            <div class="form-group">
                <label for=""><b>Dropdown 6</b></label>
                <input class="form-control" type="text" name="step6_title" value="{{old('step6_title')}}">
                <textarea class="form-control mce" type="text" name="step6_content"
                          rows="10">{{old('step6_content')}}</textarea>
            </div>

            <div class="form-group">
                <label for=""><b>Dropdown 7</b></label>
                <input class="form-control" type="text" name="step7_title" value="{{old('step7_title')}}">
                <textarea class="form-control mce" type="text" name="step7_content"
                          rows="10">{{old('step7_content')}}</textarea>
            </div>

            <button type="submit" class="fixed-bottom btn btn-primary btn-lg btn-block">CADASTRAR NOVO SERVIÇO</button>
        </form>
    </div>
@endsection

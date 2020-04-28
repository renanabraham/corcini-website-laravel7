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
        <div class="row">
            <div class="col"><p>Os compos com * são obrigatórios, ok?</p></div>
        </div>

        <form action="/admin/service/store" method="post" autocomplete="off" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for=""><b>*</b>Categoria:</label>
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
                <label for=""><b>*</b>Título:</label>
                <input class="form-control" type="text" name="title" value="{{old('title')}}">
            </div>

            <div class="form-group">
                <label><b>*</b>Subtítulo:</label>
                <input class="form-control" type="text" name="subtitle" value="{{old('subtitle')}}">
            </div>

            <div class="form-group">
                <label>"Head Line" do serviço:</label>
                <textarea class="form-control" name="headline" rows="5">{{old('headline')}}</textarea>
            </div>

            <div class="form-group">
                <label>Parágrafo 1</label>
                <textarea class="form-control" name="p1" rows="20">{{old('p1')}}</textarea>
                <small class="text-muted">
                    Must be 8-20 characters long.
                </small>
            </div>

            <div class="form-group">
                <label>Imagem com posição justificada na esquerda</label>
                <input class="form-control" type="file" name="image1" value="">
            </div>

            <div class="form-group">
                <label>Descrição da imagem justificada na esquerda</label>
                <input class="form-control" type="text" name="image1desc" value="{{old('image1desc')}}">
            </div>

            <div class="form-group">
                <label>Parágrafo 2</label>
                <textarea class="form-control" name="p2" rows="20">{{old('p2')}}</textarea>
            </div>

            <div class="form-group">
                <label>Imagem com posição justificada na direita</label>
                <input type="file" name="image2">
            </div>

            <div class="form-group">
                <label>Descrição da imagem justificada na direita</label>
                <input class="form-control" type="text" name="image2desc" value="{{old('image2desc')}}">
            </div>

            <div class="form-group">
                <label for="">Parágrafo 3</label>
                <textarea class="form-control" type="text" name="p3" rows="10">{{old('p3')}}</textarea>
            </div>

            <div class="form-group">
                <label for="">Parágrafo 4</label>
                <input class="form-control" type="text" name="p4" placeholder="p4" value="{{old('p4')}}">
            </div>

            <div class="form-group">
                <label for="">URL de video</label>
                <input class="form-control" type="text" name="video_url" value="{{old('video_url')}}">
            </div>

            <div class="form-group">
                <label for="">Descrição do video</label>
                <input class="form-control" type="text" name="video_desc" value="{{old('video_desc')}}">
            </div>

            <div class="form-group">
                <label for="">Dropdown 1</label>
                <input class="form-control" type="text" name="step1_title" value="{{old('step1_title')}}">
                <textarea class="form-control" type="text" name="step1_content"
                          rows="10">{{old('step1_content')}}</textarea>
            </div>

            <div class="form-group">
                <label for="">Dropdown 2</label>
                <input class="form-control" type="text" name="step2_title" value="{{old('step2_title')}}">
                <textarea class="form-control" type="text" name="step2_content"
                          rows="10">{{old('step2_content')}}</textarea>
            </div>

            <div class="form-group">
                <label for="">Dropdown 3</label>
                <input class="form-control" type="text" name="step3_title" value="{{old('step3_title')}}">
                <textarea class="form-control" type="text" name="step3_content"
                          rows="10">{{old('step3_content')}}</textarea>
            </div>

            <div class="form-group">
                <label for="">Dropdown 4</label>
                <input class="form-control" type="text" name="step4_title" value="{{old('step4_title')}}">
                <textarea class="form-control" type="text" name="step4_content"
                          rows="10">{{old('step4_content')}}</textarea>
            </div>

            <div class="form-group">
                <label for="">Dropdown 5</label>
                <input class="form-control" type="text" name="step5_title" value="{{old('step5_title')}}">
                <textarea class="form-control" type="text" name="step5_content"
                          rows="10">{{old('step5_content')}}</textarea>
            </div>

            <div class="form-group">
                <label for="">Dropdown 6</label>
                <input class="form-control" type="text" name="step6_title" value="{{old('step6_title')}}">
                <textarea class="form-control" type="text" name="step6_content"
                          rows="10">{{old('step6_content')}}</textarea>
            </div>

            <div class="form-group">
                <label for="">Dropdown 7</label>
                <input class="form-control" type="text" name="step7_title" value="{{old('step7_title')}}">
                <textarea class="form-control" type="text" name="step7_content"
                          rows="10">{{old('step7_content')}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-lg btn-block">CADASTRAR NOVO SERVIÇO</button>
        </form>
    </div>
@endsection

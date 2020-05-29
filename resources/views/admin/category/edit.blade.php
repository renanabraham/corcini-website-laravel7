@extends('layouts.app')

@section('content')
    <div class="container shadow p-3 mb-5 bg-white rounded">
        @foreach($errors->all() as $message)
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @endforeach
        <form action="/admin/category/update/{{$category->id}}" method="post" autocomplete="off"
              enctype="multipart/form-data">
            @csrf
            <input type="text" name="order" value="{{$category->order}}" hidden>
            <div class="form-group">
                <label for=""><b>Título da Categoria:</b></label>
                <input class="form-control" type="text" name="title" value="{{$category->title}}">
            </div>

            <div class="form-group">
                <label for=""><b>Subtítulo da Categoria:</b></label>
                <input class="form-control" type="text" name="subtitle" value="{{$category->subtitle}}">
            </div>

            @if($verify->count() >=1)
                <div class="alert alert-danger">
                    <p><b>ATENÇÃO: </b>
                    <p>Essa é uma categoria principal e possui subcategorias atreladas a ela. Você não pode deletar uma
                        categoria com outras atreladas.</p>
                </div>
            @else
                <small class="form-text text-danger">*Marque <b>#PRINCIPAL</b> para fazer desta uma categoria
                    principal!</small>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Selecione uma categoria:</label>
                    </div>

                    <select class="custom-select" name="parent">
                        <option value=""><b>#PRINCIPAL</b></option>
                        @foreach($subCats as $cat)
                            <option
                                value="{{$cat->id}}" {{($category->parent == $cat->id ? 'selected' : '')}}>{{$cat->title}}
                                - {{$cat->id}}</option>
                        @endforeach
                    </select>
                </div>
        @endif

        <!--CONTENT-->

            <div class="form-group">
                <label><b>Nome para ser mostrado no MENU do site:</b></label>
                <input class="form-control" name="menu_name" rows="1" value="{{$category->menu_name}}">
            </div>

            <div class="form-group">
                <label><b>Texto de introdução: <i>"Headline"</i></b></label>
                <textarea class="form-control" name="headline" rows="5">{{$category->headline}}</textarea>
            </div>

            <div class="bg-light p-4 form-group">
                @if($category->image1)
                    <img class="rounded" src="{{asset('storage/app/public/'.$category->image1)}}" alt="" style="width: 200px;">
                    @if($category->image1 != null)
                        <a class="btn btn-danger" href="/admin/category/delimage1/{{$category->id}}">Deletar Imagem 1</a>
                    @endif
                @else
                    <div class="rounded"
                         style="background: #d3bc8d; width: 200px; height: 90px; display: flex; justify-content: center; align-items: center;">
                        <p>Nenhuma Imagem</p></div>
                @endif
                <h3>IMAGEM 1</h3><label>Imagem com posição justificada na esquerda</label>
                <p class=" text-danger">
                    <b>Atenção: </b>Tamanho máximo de 20megas
                </p>
                <div class="form-group">
                    <input class="form-control" type="file" name="image1">
                </div>


                <div class="form-group">
                    <label>Descrição da imagem justificada na esquerda</label>
                    <textarea class="form-control" type="text" name="image1desc"
                              rows="5">{{$category->image1desc}}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label><b>Texto 1</b></label>
                <textarea class="form-control mce" name="p1" rows="25">{!! $category->p1 !!}</textarea>
            </div>

            <div class="form-group">
                <label><b>Texto Destaque</b></label>
                <textarea class="form-control mce" name="p2" rows="25">{!! $category->p2 !!}</textarea>
            </div>

            <div class="bg-light p-4 form-group">
                @if($category->image2)
                    <img class="rounded" src="{{asset('storage/app/public/'.$category->image2)}}" alt="" style="width: 200px;">
                    @if($category->image2 != null)
                        <a class="btn btn-danger" href="/admin/category/delimage2/{{$category->id}}">Deletar Imagem 2</a>
                    @endif
                @else
                    <div class="rounded"
                         style="background: #d3bc8d; width: 200px; height: 90px; display: flex; justify-content: center; align-items: center;">
                        <p>Nenhuma Imagem</p></div>
                @endif
                <h3>IMAGEM 2</h3>
                <p class=" text-danger">
                    <b>Atenção: </b>Tamanho máximo de 20megas
                </p>
                <div class="form-group">
                    <label>Imagem com posição justificada na direita</label>
                    <input class="form-control" type="file" name="image2">
                </div>

                <div class="form-group">
                    <label>Descrição da imagem justificada na direita</label>
                    <textarea class="form-control" type="text" name="image2desc"
                              rows="5">{{ $category->image2desc }}</textarea>
                </div>
            </div>


            <div class="form-group">
                <label for=""><b>Texto 2</b></label>
                <textarea class="form-control mce" type="text" name="p3" rows="25">{!! $category->p3 !!}</textarea>
            </div>

            <div class="form-group">
                <label for=""><b>URL de video</b></label>
                <input class="form-control" type="text" name="video_url" value="{!!$category->video_url!!}">
            </div>

            <div class="form-group">
                <label><b>Descrição do video</b></label>
                <input class="form-control" type="text" name="video_desc" value="{{$category->video_desc}}">
            </div>


            <div class="form-group">
                <label for=""><b>Dropdown 1</b></label>
                <input class="form-control" type="text" name="step1_title" value="{{$category->step1_title}}">
                <textarea class="form-control mce" type="text" name="step1_content"
                          rows="25">{!! $category->step1_content !!}</textarea>
            </div>

            <div class="form-group">
                <label for=""><b>Dropdown 2</b></label>
                <input class="form-control" type="text" name="step2_title" value="{{$category->step2_title}}">
                <textarea class="form-control mce" type="text" name="step2_content"
                          rows="25">{!!$category->step2_content!!}</textarea>
            </div>

            <div class="form-group">
                <label for=""><b>Dropdown 3</b></label>
                <input class="form-control" type="text" name="step3_title" value="{{$category->step3_title}}">
                <textarea class="form-control mce" type="text" name="step3_content"
                          rows="25">{!!$category->step3_content!!}</textarea>
            </div>

            <div class="form-group">
                <label for=""><b>Dropdown 4</b></label>
                <input class="form-control" type="text" name="step4_title" value="{{$category->step4_title}}">
                <textarea class="form-control mce" type="text" name="step4_content"
                          rows="25">{!!$category->step4_content!!}</textarea>
            </div>

            <div class="form-group">
                <label for=""><b>Dropdown 5</b></label>
                <input class="form-control mce" type="text" name="step5_title" value="{{$category->step5_title}}">
                <textarea class="form-control mce" type="text" name="step5_content"
                          rows="25">{!!$category->step5_content!!}</textarea>
            </div>

            <div class="form-group">
                <label for=""><b>Dropdown 6</b></label>
                <input class="form-control" type="text" name="step6_title" value="{{$category->step6_title}}">
                <textarea class="form-control mce" type="text" name="step6_content"
                          rows="25">{!! $category->step6_content !!}</textarea>
            </div>

            <div class="form-group">
                <label for=""><b>Dropdown 7</b></label>
                <input class="form-control" type="text" name="step7_title" value="{{$category->step7_title}}">
                <textarea class="form-control mce" type="text" name="step7_content"
                          rows="25">{!!$category->step7_content!!}</textarea>
            </div>


            <button type="submit" class="btn btn-primary fixed-bottom">SALVAR EDIÇÃO</button>
        </form>
    </div>
@endsection


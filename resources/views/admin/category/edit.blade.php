@extends('layouts.app')

@section('content')
    <div class="container">
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
                <label for="">Título da Categoria:</label>
                <input class="form-control" type="text" name="title" value="{{$category->title}}">
            </div>

            <div class="form-group">
                <label for="">Descrição da categoria <i>("Headline")</i>:</label>
                <input class="form-control" type="text" name="subtitle" value="{{$category->subtitle}}">
            </div>

            @if($verify->count() >=1)
                <p><b>ATENÇÃO: </b><p>Essa é uma categoria principal e possui subcategorias atreladas a ela. Você não pode deletar uma categoria com outras atreladas.</p>
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
                            <option value="{{$cat->id}}" {{($category->parent == $cat->id ? 'selected' : '')}}>{{$cat->title}}
                                - {{$cat->id}}</option>
                        @endforeach
                    </select>
                </div>
            @endif

            <button type="submit" class="btn btn-primary">SALVAR EDIÇÃO</button>
        </form>
    </div>
@endsection


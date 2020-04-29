@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach($errors->all() as $message)
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @endforeach
        <form action="/admin/category/store" method="post" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Título da categoria</label>
                <input class="form-control" type="text" name="title" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="">Subtítulo da categoria</label>
                <input class="form-control" type="text" name="subtitle" value="{{old('subtitle')}}">
            </div>

            <small class="form-text text-danger">*Marque <b>#PRINCIPAL</b> para fazer desta uma categoria
                principal!</small>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Selecione uma categoria:</label>
                </div>

                <select class="custom-select" name="parent">
                    <option value="">#PRINCIPAL</option>
                    @foreach($categories as $cat)
                        <option value="{{$cat->id}}" {{(old('parent') == $cat->id ? 'selected' : '')}}>{{$cat->title}}
                            - {{$cat->id}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">SALVAR</button>
        </form>
    </div>
@endsection

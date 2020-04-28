@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($errors->all() as $message)
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @endforeach
        <form action="/admin/addr/store" method="post" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Foto do local:</label>
                <input type="file" name="photo"/>
            </div>
            <div class="form-group">
                <label for="">Cidade:</label>
                <input class="form-control" type="text" name="city" value="{{old('city')}}">
            </div>

            <div class="form-group">
                <label for="">Endereço:</label>
                <input class="form-control" type="text" name="addr" value="{{{old('addr')}}}">
            </div>

            <div class="form-group">
                <label for="">Whatsapp:</label>
                <input class="form-control" type="text" name="whatsapp" value="{{old('whatsapp')}}">
            </div>

            <div class="form-group">
                <label for="">Telefone:</label>
                <input class="form-control" type="text" name="phone" value="{{old('phone')}}">
            </div>
            <button type="submit" class="btn btn-primary">SALVAR</button>
        </form>
    </div>
@endsection

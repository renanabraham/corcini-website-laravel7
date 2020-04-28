@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($errors->all() as $message)
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @endforeach
        <form action="/admin/addr/update/{{$addr->id}}" method="post" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Foto do local:</label>
                <input type="file" name="photo"/>
            </div>
            <div class="form-group">
                <label for="">Cidade:</label>
                <input class="form-control" type="text" name="city" value="{{$addr->city}}">
            </div>

            <div class="form-group">
                <label for="">Endereço:</label>
            <input class="form-control" type="text" name="addr" value="{{$addr->addr}}">
            </div>

            <div class="form-group">
                <label for="">Whatsapp:</label>
            <input class="form-control" type="text" name="whatsapp" value="{{$addr->whatsapp}}">
            </div>

            <div class="form-group">
                <label for="">Telefone:</label>
            <input class="form-control" type="text" name="phone" value="{{$addr->phone}}">
            </div>
            <button type="submit" class="btn btn-primary">SALVAR EDIÇÃO</button>
        </form>
    </div>
@endsection


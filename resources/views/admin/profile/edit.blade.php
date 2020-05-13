@extends('layouts.app')

@section('content')

    <div class="container shadow p-3 mb-5 bg-white rounded">
        @foreach($errors->all() as $message)
            <div class="alert alert-danger" role="alert">
                <b>*error:</b> {{$message}}
            </div>
        @endforeach
        <div class="row">
            <div class="col"><h2>Editando: <b>Página Sobre a Dra. Ana</b></h2></div>
        </div>
        <form action="/admin/profile/update/{{$profile->id}}" method="post" autocomplete="off"
              enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for=""><b>*</b>Título:</label>
                <input class="form-control" type="text" name="title" value="{{$profile->title}}">
            </div>

            <div class="form-group">
                <label><b>*</b>Subtítulo:</label>
                <input class="form-control" type="text" name="subtitle" placeholder="" value="{{$profile->subtitle}}">
            </div>

            <div class="form-group">
                <label><b>*</b>"Head Line" da página:</label>
                <textarea class="form-control" name="headline" rows="5">{{$profile->headline}}</textarea>
            </div>

            <div class="form-group">
                <label><b>*</b>Parágrafo 1</label>
                <textarea class="form-control" name="p1" rows="10">{{$profile->p1}}</textarea>
                <small class="text-muted">
                    Must be 8-20 characters long.
                </small>
            </div>

            <div class="form-group">
                <label>Parágrafo 2</label>
                <textarea class="form-control" name="p2" rows="10">{{$profile->p2}}</textarea>
            </div>


            <div class="form-group">
                <label for="">Parágrafo 3</label>
                <textarea class="form-control" name="p3" rows="10">{{$profile->p3}}</textarea>
            </div>

            <div class="form-group">
                <label for=""><b>*</b>Parágrafo 4</label>
                <textarea class="form-control" name="p4" rows="10">{{$profile->p4}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-lg btn-block">SALVAR EDIÇÃO</button>

        </form>
    </div>
@endsection


@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>:(</h1>
        <h4 class="mb-4">Oppsss, <b>{{\Illuminate\Support\Facades\Auth::user()->name}}</b>. Encontramos um erro!</h4>
        <p>Na caixa abaixo você pode descobrir o que deu de errado na sua ação.</p>
        <div class="alert alert-danger" role="alert">
            <b>Alerta:</b><p>{!!$erro!!}</p>
        </div>
        <a class="btn btn-primary" href="{{$route}}"><b>Voltar</b></a>
    </div>
@endsection
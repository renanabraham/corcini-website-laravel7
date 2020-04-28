@extends('layouts.app')

@section('content')
    <div class="container">
        @include('admin.category.list')
        @include('admin.service.list')
        @include('admin.addr.list')
    </div>
@endsection

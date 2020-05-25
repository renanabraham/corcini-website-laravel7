@extends('master.master')
@php
    $menuColor = "wine";
    $title = "servicos";
@endphp
@section('title', 'Serviços')

@section('content')
    @include('includes.header')
    <span class="services"></span>
    @include('includes.social_fixed_yellow')

    @include('includes.post_content')

    <div class="services-post-go-out-1178">
        @include('includes.contact')
        @include('includes.services')
    </div>
    @include('includes.upnow')
@endsection

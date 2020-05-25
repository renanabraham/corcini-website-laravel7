@extends('master.master')
@php
    $menuColor = "wine";
    $title = "contato";
@endphp
@section('title', 'Contato')

@section('content')
    @include('includes.header')
    <span class="contact"></span>
    @include('includes.social_fixed_for_yellow_bg')
    <div class="posts_header">
        <a href="{{url('/')}}"><img src="{{asset('images/desktop/logo.png')}}" alt=""></a>
    </div>
    <div style="padding-top: 100px;">
        @include('includes.footer')
    </div>
    @include('includes.know_more')
    @include('includes.upnow')
@endsection

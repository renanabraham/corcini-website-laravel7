@extends('master.master')
@php
    $menuColor = "wine";
@endphp
@section('title', $service->title)

@section('content')
    @include('includes.header')
    <span class="services"></span>
    @include('includes.social_fixed_yellow')

    @include('includes.post_unique')

    <div class="services-post-go-out-1178">
        @include('includes.contact')
        @include('includes.services')
    </div>
@endsection

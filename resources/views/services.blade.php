@extends('master.master')
@php
    $menuColor = "wine";
    $title = "servicos";
@endphp
@section('title', '')

@section('content')
    @include('includes.header')
    <span class="services"></span>
    @include('includes.social_fixed_yellow')

    @include('includes.post')

    @include('includes.contact')
    @include('includes.services')
@endsection

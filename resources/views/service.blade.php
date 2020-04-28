@extends('master.master')
@php
    $menuColor = "wine";
    $title = "servicos";
@endphp
@section('title', $service->title)

@section('content')
    @include('includes.header')
    @include('includes.social_fixed_yellow')

    @include('includes.post_unique')

    @include('includes.contact')
    @include('includes.services')
@endsection

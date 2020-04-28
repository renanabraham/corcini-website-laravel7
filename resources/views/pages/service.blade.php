@extends('master.master')
@php
    $menuColor = "wine";
    $title = "Servicos";
@endphp
@section('title', 'SERVICE')

@section('content')
    @include('includes.header')
    @include('includes.social_fixed_yellow')


    @include('includes.contact')
    @include('includes.services')
@endsection

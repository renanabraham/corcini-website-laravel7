@extends('master.master')
@php
    $menuColor = "wine";
@endphp
@section('title', 'Dra. Ana Corcini')

@section('content')
    @include('includes.header')
    <span class="profile"></span>
    @include('includes.about')
    @include('includes.services')
    @include('includes.footer')
    @include('includes.upnow')
@endsection

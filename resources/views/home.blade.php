@extends('master.master')
@php
    $menuColor = "sand";
@endphp

@section('content')
    @include('includes.logo_for_mobile')
    @include('includes.header')
    <span class="home"></span>
    @include('includes.social_fixed_white')
    @include('includes.slides')
    @include('includes.services')
    @include('includes.footer')
    @include('includes.know_more')
    @include('includes.upnow')
@endsection

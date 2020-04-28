@extends('master.master')

@section('title', 'Home')

@section('content')
    @include('includes.header')
    <span class="home"></span>
    @include('includes.social_fixed_white')
    @include('includes.slides')
    @include('includes.services')
    @include('includes.footer')
@endsection

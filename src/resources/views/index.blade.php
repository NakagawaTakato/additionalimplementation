@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="container">
    <a href="/" class="container-exit">×</a>
    <div class="container-group">
        <a href="/shop_all" class="container-group-text_one">Home</a>
        <a href="/register" class="container-group-text_two">Registration</a>
        <a href="/login" class="container-group-text_three">Login</a>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endsection

@section('content')
<div class="container">
    <a href="/menu_two" class="container-exit"><i class="fa-solid fa-xmark"></i></a>

    <div class="container-group">
        <a href="/shop_all" class="container-group-text_one">Home</a>
        <form class="form" action="/logout" method="post">
            @csrf
            <input class="container-group-logout" type="submit" value="logout">
        </form>
        <a href="/my_page" class="container-group-text_three">Mypage</a>
    </div>
</div>
@endsection

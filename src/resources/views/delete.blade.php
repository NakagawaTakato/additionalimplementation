@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endsection

@section('content')
@csrf
<div class="container">
  <a href="/menu_two" class="container-exit"><i class="fa-solid fa-bars"></i></a>
  <p class="container-text">Rese</p>
</div>
<div class="wrapper">
  <div class="wrapper-text">削除しました。</div>
  <a href="http://localhost/shop_all" class="wrapper-button">戻る</a>
</div>
@endsection

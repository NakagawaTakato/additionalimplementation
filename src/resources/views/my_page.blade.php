@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/my_page.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endsection

@section('content')
<div class="container">
    <a href="/menu_two" class="container-exit"><i class="fa-solid fa-bars"></i></a>
    <p class="container-text">Rese</p>
    
    <div class="container-leftandright">
        <div class="container-box">
            <h2>予約状況</h2>
            @foreach($manys as $many)
            <div class="container-box-about">
                <form action="/delete" method="post">
                    @csrf
                    <i class="fa-solid fa-check"></i>
                    <p class="container-box-about-name">Shop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $many->name_send }}</p>
                    <p class="container-box-about-date">Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $many->date }}</p>
                    <p class="container-box-about-param">Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $many->wrapper->param }}</p>
                    <p class="container-box-about-value">Number&nbsp;&nbsp;&nbsp;&nbsp;{{ $many->number->value }}</p>
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{ $many->id }}">
                    <button type="submit" class="container-box-delete"><i class="fa-solid fa-xmark"></i></button>
                </form>
            </div>
            @endforeach
        </div>

        <h2 class="favorite">お気に入り店舗</h2>
        <div class="wrapper">
        @foreach ($authors as $author)
            @if($author->is_correct == 1)
            <div class="wrapper-box" id="{{$author->id}}">
                <div class="wrapper-box-img">
                    <img class="wrapper-box-img-detail" src="{{ $author->image }}" alt="" />
                </div>
                <div class="wrapper-box-group">
                    <div class="wrapper-box-group-content">
                        <h3 class="wrapper-box-content-group-ttl">
                        {{$author->name}}
                        </h3>
                        <p class="wrapper-box-content-group-text">
                        @if($author->gender == 1)
                        #東京都
                        @elseif($author->gender == 2)
                        #大阪府
                        @else
                        #福岡県
                        @endif
                        </p>
                        <p class="wrapper-box-content-text-group-categories">
                        #{{$author->category->content}}
                        </p>

                        <div class="wrapper-box-content-group-cat">詳しくみる</div>
                        <div class="wrapper-box-content-group-heart"><i class="fa-solid fa-heart"></i></div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
        </div>
    </div>
</div>
@endsection

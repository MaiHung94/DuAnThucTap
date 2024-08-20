@extends('layouts.client.index')
@section('content')
@section('css')
<link rel="stylesheet" href="{{ asset('css/cpt7.css') }}">
@endsection
    <div class="container">
        <div class="content1">
            <h5>TIN TỨC</h5>
        </div>
        <div class="content1-ul">
            <ul class="ul-content1">
                <li class="li-content1"><a href="/cpt.html">TRANG CHỦ </a></li>
                <li class="li-content1"> Tin Tức </li>
                <li class="li-content1" style="color: #116cbf;">
                    <p style="color: black;"> {{ $detail->name }}</p>
                </li>

            </ul>
        </div>
    </div>
    {{-- <div style="margin-top:50px;">
        <div class="content-2">
            <h1>{{ $detail->name }}</h1>
            <p>{{ $detail->content }}</p>
        </div>
    </div> --}}
    <div class="content4-sp" style="margin-top:160px;">
        <h1>{{ $detail->name }}</h1>
        <p>{{ $detail->content }}</p>
    </div>
    <h1 style="margin: 100px 200px;">Tin Tức Liên Quan</h1>

    <div class="content4-sp">
        
        @foreach ($posts as $item)
        <div class="content4-2">
            <img src="{{ url($item->post_image) }}" alt="" style="width: 100%; height: 200px;">
            <div class="color-banner">
                <p style="text-align: center;">{{ $item->name }}</p>
            </div>
            <div class="name-sp">{{ $item->content }}
                <h4 style="margin-top: 20px;"><a href="{{ url('chi-tiet-bai-viet/'.$item->slug) }}">xem thêm</a> </h4>
            </div>
        </div>
            
        @endforeach
       
    </div>
@endsection

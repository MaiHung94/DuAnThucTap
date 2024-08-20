@extends('layouts.client.index')
@section('content')
    @section('css')
    <link rel="stylesheet" href="{{ asset('css/cpt3.css') }}">    @endsection
    <div class="container">
        <div class="content1">
            <h5>{{ $find_id->name }}</h5>
        </div>
        <div class="content1-ul">
            <ul class="ul-content1">
                <li class="li-content1"><a href="/cpt.html">TRANG CHỦ </a></li>
                <li class="li-content1" style="color: #116cbf;">
                    <p style="color: black;">Vật tư y tế </p>
                </li>
            </ul>
        </div>
    </div>
    <div class="content4-sp">
        
       @foreach ($products as $product)
       <div class="content4-2">
        <img src="{{ url($product->product_image) }}" alt="" style="width: 100%; height: 200px;">
        <div class="color-banner">
            <p style="text-align: center;">{{ $product->name }}</p>
        </div>
        <div class="name-sp">{!! Str::limit($product->content,100) !!}
            <h4 style="margin-top: 20px;"><a href="{{ url('chi-tiet-bai-viet/'.$product->slug) }}">xem thêm</a>  </h4>
        </div>

    </div>   
       @endforeach

    </div>

@endsection
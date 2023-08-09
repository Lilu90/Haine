<?php
@extends('layout.main')

@section('content')

    <div class="background_categories" >
        Hello, {{ 'name' }}.
    </div>

    <div class="cart-table">
        @foreach(Cart::count() as $item)
            <div class="cart-table-row-left">
                <a href="{{route('shop.show',$item->model->slug)}}">
                    <img src="{{ asset("./images/t-shirt_image". $item->model->slug.'.jpg')}}"
                         alt="item" class="cart-table-img">
                </a>
            </div>
            <div class="cart-item-detail">
                <div class="cart-table-item">
                    <a href="{{route('shop.show',$item->model->slug)}}"></a>
                </div>
                <div class="cart-table-description"></div>
            </div>
    </div>




@endsection

@extends('layouts.master')
@include('front.menutop')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="task">
                <h4 class="color" style="text-align: center;">Detail</h4>
            </div>
        </div>
    </div>
</div>
<div class="detail">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <img class="imgdt" src="{{ $products->image }}" alt="">
            </div>
            <div class="col-12 col-md-1 endbor">
            </div>
            <div class="col-12 col-md-7 bor">
                <h3 class="namepr">{{ $products->name }}</h3>
                <h5>Giá: {{ $products->price }}</h5>
                <h5>Màn hình: {{ $products->screen }}</h5>
                <h5>Pin: {{ $products->pin }}</h5>
                <h5>Thẻ SD: {{ $products->card }}</h5>
                <h5>CPU: {{ $products->cpu }}</h5>
                <h5>Camera: {{ $products->camera }}</h5>
                <h5>Hệ điều hành: {{ $products->hdh }}</h5>
                <h5>Tính năng: {{ $products->desc }}</h5>
                <div class="quantity">
                    <form method="POST">
                        @csrf
                        <input type="number" class="ipwid" name="quantity" value="1" min="1">
                        <input type="submit" name="submit" class="btn btn-info" value="Add to Cart">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('front.footer')

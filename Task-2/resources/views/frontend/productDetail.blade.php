@extends('frontend.master')

@section('title')
    Product-Detail
@endsection

@section('content')
    <div class="container py-3">
        <div class="row">
            <div class="col-8 offset-2">
                <img src="{{ asset("/$product->image") }}" alt="">
                <h1>{{ $product->name }}</h1>
                <p>Price: {{ $product->price }} Tk</p>
                <p>{{ $product->description }}</p>
            </div>
        </div>
    </div>
@endsection

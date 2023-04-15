@extends('frontend.master')

@section('title')
    Product
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-3 ">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset("/$product->image") }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <a href="{{ route('product.detail', ['id' => $product->id]) }}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

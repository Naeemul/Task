@extends('frontend.master')

@section('title')
    Home
@endsection

@section('content')
    {{-- carousel --}}
    <section>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/carousel-Images/1-main-banner.webp') }}" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('frontend/carousel-Images/2-main-banner.webp') }}" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('frontend/carousel-Images/3-main-banner.webp') }}" class="d-block w-100"
                        alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    {{-- Show Products --}}
    <section>
        <div class="maincontent-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="latest-product">
                            <h2 class="section-title">Products</h2>
                            <div class="product-carousel">
                                @foreach ($products as $product)
                                    <div class="single-product">
                                        <div class="product-f-image">
                                            <img src="{{ asset("/$product->image") }}" alt="">
                                            <div class="product-hover">
                                                <a href="#" class="add-to-cart-link"><i
                                                        class="fa fa-shopping-cart"></i> Add to cart</a>
                                                <a href="{{ route('product.detail', ['id' => $product->id]) }}" class="view-details-link"><i
                                                        class="fa fa-link"></i> See details</a>
                                            </div>
                                        </div>
                                        <h2><a href="{{ route('product.detail', ['id' => $product->id]) }}">{{ $product->name }}</a></h2>
                                        <div class="product-carousel-price">
                                            <ins>{{ $product->price }}Tk</ins>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Show Category --}}
    <section>
        <div class="maincontent-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="latest-product">
                            <h2 class="section-title">Category</h2>
                            <div class="product-carousel">
                                @foreach ($categories as $category)
                                    <div class="single-product">
                                        <div class="product-f-image">
                                            <img src="{{ asset("/$category->image") }}" alt="">
                                        </div>
                                        <h2 align='center'><a href="#">{{ $category->name }}</a></h2>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

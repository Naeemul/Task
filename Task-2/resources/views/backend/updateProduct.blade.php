@extends('backend.master')

@section('title')
    Update-Product
@endsection

@section('content')

<section class="py-4">
    <div class="container">
        <div class="row">
                <div class="col-md-8 col-12 offset-md-2 ">
                    <form action="{{ route('update.product.complete', ['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="productName" class="form-label text-primary-emphasis fs-4">Product-Name*</label>
                            <input class="form-control" type="text" name="productName" id="productName" value="{{ $product->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label text-primary-emphasis fs-4">Description*</label>
                            <input class="form-control " type="text" name="description" id="description" value="{{ $product->description }}" rows="8" required>
                        </div>
                        <div class="mb-3">
                            <label for="productName" class="form-label text-primary-emphasis fs-4">Category*</label>
                            <select class="form-select" aria-label="Default select example" name="categoryID" required>
                                @foreach ($categories as $category)
                                    @if($category->id == $product->categoryID)
                                        <option selected value="{{ $category->id }}">{{ $category->name }}</option>  {{-- selected actual category  --}}
                                        @break
                                    @endif
                                @endforeach
                                @foreach ($categories as $category)
                                    @if($category->id != $product->categoryID)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>  {{-- show other categories  --}}
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label text-primary-emphasis fs-4">Price*</label>
                            <input class="form-control" type="number" name="price" id="price" value="{{ $product->price }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label text-primary-emphasis fs-4">Image*</label>
                            <img src="{{ asset("/$product->image") }}" width="300px" height="200px">
                            <input class="form-control" type="file" name="image" id="image">
                        </div>
                        <br>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

        </div>
    </div>
</section>
@endsection


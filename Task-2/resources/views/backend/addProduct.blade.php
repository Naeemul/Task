@extends('backend.master')

@section('title')
    Add-Product
@endsection

@section('content')

<section class="py-4">
    <div class="container">
        <div class="row">
                <div class="col-md-8 col-12 offset-md-2 ">
                    <h3 align="center">{{ Session::get('msg') }}</h3>
                    <form action="{{ route('add.product.complete') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="productName" class="form-label text-primary-emphasis fs-4">Product-Name*</label>
                            <input class="form-control" type="text" name="productName" id="productName" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label text-primary-emphasis fs-4">Description*</label>
                            <textarea class="form-control " type="text" name="description" id="description" rows="8" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="productName" class="form-label text-primary-emphasis fs-4">Category*</label>
                            <select class="form-select" aria-label="Default select example" name="categoryID" required>
                                <option selected disabled>select category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label text-primary-emphasis fs-4">Price*</label>
                            <input class="form-control" type="number" name="price" id="price" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label text-primary-emphasis fs-4">Image*</label>
                            <input class="form-control" type="file" name="image" id="image" required>
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


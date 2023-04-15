@extends('backend.master')

@section('title')
    Add-Category
@endsection

@section('content')

<section class="py-4">
    <div class="container">
        <div class="row">
                <div class="col-md-8 col-12 offset-md-2 ">
                    <h3 align="center">{{ Session::get('msg') }}</h3>
                    <form action="{{ route('add.category.complete') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="categoryName" class="form-label text-primary-emphasis fs-4">Category-Name*</label>
                            <input class="form-control" type="text" name="categoryName" id="categoryName" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label text-primary-emphasis fs-4">Description*</label>
                            <textarea class="form-control " type="text" name="description" id="description" rows="8" required></textarea>
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


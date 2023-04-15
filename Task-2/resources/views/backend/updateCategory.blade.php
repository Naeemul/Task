@extends('backend.master')

@section('title')
    Update-Category
@endsection

@section('content')
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 offset-md-2 ">
                    <form action="{{ route('update.category.complete',['id' => $category->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="categoryName" class="form-label text-primary-emphasis fs-4">Category-Name*</label>
                            <input class="form-control" type="text" name="categoryName" id="categoryName" value="{{ $category->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label text-primary-emphasis fs-4">Description*</label>
                            <input class="form-control " type="text" name="description" id="description" value="{{ $category->description }}"
                                rows="8" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label text-primary-emphasis fs-4">Image*</label>
                            <img src="{{ asset("/$category->image") }}" width="300px" height="200px">
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

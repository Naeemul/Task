@extends('backend.master')

@section('title')
    Manage-Product
@endsection

@section('content')
    <h3 align="center">{{ Session::get('msg') }}</h3>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <h3 align="center">Product</h3>
                    <table class="table table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>
                                        <img src="{{ asset("/$product->image") }}" width="250px" height="120px">
                                    </td>
                                    <td>{{ $product->name}}</td>
                                    <td>{{ $product->description }}</td>
                                    @foreach ($categories as $category)
                                        @if($category->id == $product->categoryID)
                                            <td>{{ $category->name }}</td>
                                        @endif
                                    @endforeach
                                    <td>{{ $product->price }}</td>
                                    <td width="20%">
                                        <a class="btn btn-primary" href="{{ route('update.product', ['id' => $product->id]) }}">
                                            Update
                                        </a>
                                        <a class="btn btn-danger" href="{{ route('delete.product', ['id' => $product->id]) }}"
                                            onclick="return confirm('Are you sure to delete this category')">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

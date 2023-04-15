@extends('backend.master')

@section('title')
    Manage-Category
@endsection

@section('content')
    <h3 align="center">{{ Session::get('msg') }}</h3>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <h3 align="center">Category</h3>
                    <table class="table table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>
                                        <img src="{{ asset("/$category->image") }}" width="250px" height="120px">
                                    </td>
                                    <td>{{ $category->name}}</td>
                                    <td>{{ $category->description }}</td>
                                    <td width="20%">
                                        <a class="btn btn-primary" href="{{ route('update.category', ['id' => $category->id]) }}">
                                            Update
                                        </a>
                                        <a class="btn btn-danger" href="{{ route('delete.category', ['id' => $category->id]) }}"
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

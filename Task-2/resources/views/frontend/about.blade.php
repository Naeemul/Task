@extends('frontend.master')

@section('title')
    About
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img height="500px" width="80%" src="{{ asset('frontend/images/about.jpg') }}" alt=""> <br>
                <h1 class="text-center">Our History</h1>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.main')

@section('content')
    <h2 class="mb-5">Kategori</h2>
    <div class="container">
        <div class="row">
            @foreach ($data as $content)
                <div class="col-md-4">
                    <a href="/category/{{ $content->slug }}" class="text-decoration-none">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/500x500/?flower, garden" class="card-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $content->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

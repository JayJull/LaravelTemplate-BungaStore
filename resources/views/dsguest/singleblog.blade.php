@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>{{ $data->title }}</h3>
                <p> {{ $data->title }} ini <a href="/category/{{ $data->kategori->slug }}" class="text-decoration-none">
                        {{ $data->kategori->name }}</a></p>
                <h5>Rp. {{ $data->harga }}</h5>
                <img src="https://source.unsplash.com/1200x400/?flower" class="img-fluid" alt="#">
                <p class="mt-2">{{ $data->deskripsi }}</p>
                <a href="/blog" class="text-decoration-none">Back to blog</a>
            </div>
        </div>
    </div>
@endsection

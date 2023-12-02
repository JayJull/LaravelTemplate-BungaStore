@extends('layouts.main')

@section('content')
    @if ($data->count())
        <div class="card mb-3">
            <div class="position-absolute bg-dark px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)"><a
                    href="/category/{{ $data[0]->kategori->slug }}"
                    class="text-white text-decoration-none">{{ $data[0]->kategori->name }}</a></div>
            <img src="https://source.unsplash.com/1200x400/?flower" class="card-img-top" alt="#">
            <div class="card-body">
                <h3 class="card-title">{{ $data[0]->title }}</h3>
                <h5>Rp. {{ $data[0]->harga }}</h5>
                <p class="card-text"><small class="text-muted">Last updated
                        {{ $data[0]->created_at->diffForHumans() }}</small></p>
                <p class="card-text">{{ $data[0]->excrept }}</p>
                <a href="/blog/{{ $data[0]->slug }}" class="text-decoration-none">Read more..</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($data->skip(1) as $content)
                <div class="col-md-4">
                    <div class="card">
                        <div class="position-absolute bg-dark px-3 py-2 text-white"
                            style="background-color: rgba(0, 0, 0, 0.7)"><a href="/category/{{ $content->kategori->slug }}"
                                class="text-white text-decoration-none">{{ $content->kategori->name }}</a></div>
                        <img src="https://source.unsplash.com/500x500/?flower" class="card-img-top" alt="#">
                        <div class="card-body">
                            <h5 class="card-title">{{ $content->title }}</h5>
                            <h5>Rp. {{ $content->harga }}</h5>
                            <p class="card-text"><small class="text-muted">Last updated
                                    {{ $content->created_at->diffForHumans() }}</small></p>
                            <p class="card-text">{{ $content->excrept }}</p>
                            <a href="/blog/{{ $content->slug }}" class="text-decoration-none">Read more..</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

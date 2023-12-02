@extends('dsadmin.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create new</h1>
    </div>


    <div class="col-lg-8">
        <form action="/store" method="POST">
            @csrf

            <div class="mb-1">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" name="kategori_id">
                    @foreach ($data as $content)
                    <option value="{{ $content->id }}">{{ $content->name }}</option>
                    @endforeach
                  </select>
             </div>
            <div class="mb-1">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required>
                @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-1">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" required>
                @error('harga')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-1">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" disabled readonly>
            </div>
            <div class="mb-1">
                <label for="excrept" class="form-label">Excrept</label>
                <textarea type="text" class="form-control @error('excrept') is-invalid @enderror" id="excrept" name="excrept" rows="3"></textarea>
                @error('excrept')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="5"></textarea>
                @error('deskripsi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script>
        const title = document.querySelector('#title')
        const slug = document.querySelector('#slug')

        title.addEventListener('change', function(){
            fetch('/crudcreateslug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });

    </script>
@endsection


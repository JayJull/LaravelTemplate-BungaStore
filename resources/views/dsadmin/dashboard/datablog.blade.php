@extends('dsadmin.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">CRUD</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-8">
    <a href="/crudshow" class="btn btn-primary mb-3">Tambah Product</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Harga</th>
          <th scope="col">Kategori</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($data as $content)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $content->title }}</td>
            <td>{{ $content->harga }}</td>
            <td>{{ $content->kategori->name }}</td>
            <td>
                <a href="/crud/edit/{{ $content->slug }}" class="badge bg-info"><i class="bi bi-pencil-square"></i></a>
                <form action="/crud/delete/{{ $content->slug }}" method="POST" class="d-inline">
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i>
                </button>
                </form>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection


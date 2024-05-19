@extends('admin.layout')
@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">{{ $tittle }}</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
          <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
          <svg class="bi"><use xlink:href="#calendar3"/></svg>
          This week
        </button>
      </div>
    </div>

    @include('partials.massageError')
    <button class="btn btn-success"><a style="text-decoration: none; color:white;" href="{{ url('dashboard/create') }}">&plus; Tambah Product</a></button>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Product</th>
            <th scope="col">Jenis Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->product }}</td>
                <td>{{ $product->description }}</td>
                <td>@currency($product->price)</td>
                <td>
                    <a href="{{ url('dashboard/'.$product->id).'/edit' }}" class="btn btn-primary"> <i data-feather="edit"></i></a>
                    <form class="d-inline" onsubmit="return confirm('Yakin akan menghapus data?')"  action="{{ url('dashboard/'.$product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i data-feather="x-square"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      {{ $products->links() }}

  </main>
@endsection

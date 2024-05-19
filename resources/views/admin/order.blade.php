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
    <div class="container-fluid">
      <h2>Pesanan</h2><hr>
    </div>
    @include('partials.massageError')
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">produk</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $order)
            <tr>
                <td>{{ $order->name }}</td>
                <td>{{ $order->address }}</td>
                <td>{{ $order->product }}</td>
                <td>{{ $order->description }}</td>
                <td>
                  <form class="d-inline" onsubmit="return confirm('Yakin pesanan sudah selesai?')"  action="{{ url('dashboard/order/'.$order->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-primary"><i data-feather="check"></i></button>
                  </form>
                    <form class="d-inline" onsubmit="return confirm('Yakin akan menghapus pesanan?')"  action="{{ url('dashboard/order/'.$order->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i data-feather="x-square"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      {{ $data->links() }}

      <div class="container-fluid">
        <h2>Pesanan Selesai</h2><hr>
      </div>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">produk</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data2 as $ordered)
            <tr>
                <td>{{ $ordered->name }}</td>
                <td>{{ $ordered->address }}</td>
                <td>{{ $ordered->product }}</td>
                <td>{{ $ordered->description }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>

  </main>
@endsection

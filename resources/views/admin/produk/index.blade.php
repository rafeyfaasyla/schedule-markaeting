@extends('layouts.admin')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-md-9">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data produk
                        <a href="{{ route('produk.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Code produk</th>
                                        <th>Nama produk</th>
                                        <th>Jenis Produk</th>
                                        <th>Katalog</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($pro as $produk)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $produk->code_produk }}</td>
                                            <td>{{ $produk->nama_produk }}</td>
                                            <td>{{ $produk->jenis_produk }}</td>
                                            <td><img src="{{ $produk->image() }}" style="width: 140px; height: 140px;"></td>
                                            <td>{{ $produk->deskripsi }}</td>
                                            <td>
                                                <form action="{{ route('produk.destroy', $produk->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('produk.edit', $produk->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

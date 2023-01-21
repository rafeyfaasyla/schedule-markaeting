@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Perusahaan
                        <a href="{{ route('perusahaan.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama perusahaan</th>
                                        <th>Alamat</th>
                                        <th>Detail</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($per as $perusahaan)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $perusahaan->nama_perusahaan }}</td>
                                            <td>{{ $perusahaan->alamat }}</td>
                                            <td>{{ $perusahaan->detail }}</td>
                                            <td>
                                                <form action="{{ route('perusahaan.destroy', $perusahaan->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('perusahaan.edit', $perusahaan->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('perusahaan.show', $perusahaan->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Show
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

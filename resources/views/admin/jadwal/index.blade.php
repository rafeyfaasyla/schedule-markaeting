@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data jadwal
                        <a href="{{ route('jadwal.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama perusahaan</th>
                                        <th>Nama project</th>
                                        <th>Nama produk</th>
                                        <th>Kegiatan </th>
                                        <th>Status Kegiatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($schadule as $jadwal)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $jadwal->activity->tanggal }}</td>
                                            <td>{{ $jadwal->perusahaan->nama_perusahaan }}</td>
                                            <td>{{ $jadwal->project->nama_project }}</td>
                                            <td>{{ $jadwal->produk->nama_produk }}</td>
                                            <td>{{ $jadwal->activity->kegiatan }}</td>
                                            <td>{{ $jadwal->activity->status }}</td>                                            <td>
                                                <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <a href="{{ route('jadwal.show', $jadwal->id) }}"
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

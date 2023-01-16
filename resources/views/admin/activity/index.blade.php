@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data activity
                        <a href="{{ route('act.create') }}" class="btn btn-sm btn-primary" style="float: right">
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
                                        <th>kegiatan</th>
                                        <th>status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($act as $activity)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $activity->tanggal }}</td>
                                            <td>{{ $activity->kegiatan }}</td>
                                            <td>{{ $activity->status }}</td>
                                            <td>
                                                <form action="{{ route('act.destroy', $activity->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('act.edit', $activity->id) }}"
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

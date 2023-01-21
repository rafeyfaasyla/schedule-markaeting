@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data project
                        <a href="{{ route('project.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Code Project</th>
                                        <th>Tanggal</th>
                                        <th>Nama Project</th>
                                        <th>Jenis Project</th>
                                        <th>deadline</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($projec as $project)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $project->code_project }}</td>
                                            <td>{{ $project->tanggal}}</td>
                                            <td>{{ $project->nama_project }}</td>
                                            <td>{{ $project->jenis_project }}</td>
                                            <td>{{ $project->deadline}}</td>
                                            <td>
                                                <form action="{{ route('project.destroy', $project->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('project.edit', $project->id) }}"
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

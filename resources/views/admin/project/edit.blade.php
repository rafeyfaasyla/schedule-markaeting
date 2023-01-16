@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data project
                    </div>
                    <div class="card-body">
                        <form action="{{ route('project.update', $projec->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Code project</label>
                                <input type="text" class="form-control  @error('code_project') is-invalid @enderror"
                                    name="code_project" value="{{ $projec->code_project }}">
                                @error('code_project')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">tanggal</label>
                                <input type="date" class="form-control  @error('tanggal') is-invalid @enderror"
                                    name="tanggal" value="{{ $projec->tanggal }}">
                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama project</label>
                                <input type="text" class="form-control  @error('nama_project') is-invalid @enderror"
                                    name="nama_project" value="{{ $projec->nama_project }}">
                                @error('nama_project')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Jenis project</label>
                                <input type="text" class="form-control  @error('jenis_project') is-invalid @enderror"
                                    name="jenis_project" value="{{ $projec->jenis_project }}">
                                @error('jenis_project')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deadline</label>
                                <input type="date" class="form-control  @error('deadline') is-invalid @enderror"
                                    name="deadline" value="{{ $projec->deadline }}">
                                @error('deadline')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

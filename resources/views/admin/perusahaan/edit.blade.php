@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data perusahaan
                    </div>
                    <div class="card-body">
                        <form action="{{ route('perusahaan.update', $per->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Nama Perusahaan</label>
                                <input type="text" class="form-control  @error('nama_perusahaan') is-invalid @enderror"
                                    name="nama_perusahaan" value="{{ $per->nama_perusahaan }}">
                                @error('nama_perusahaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control  @error('alamat') is-invalid @enderror"
                                    name="alamat" value="{{ $per->alamat }}">
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Details</label>
                                <input type="detail" class="form-control  @error('detail') is-invalid @enderror"
                                    name="detail" value="{{ $per->detail }}">
                                @error('detail')
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

@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data perusahaan
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Perusahaan</label>
                            <input type="text" class="form-control " name="nama_perusahaan" value="{{ $per->nama_perusahaan }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control " name="alamat" value="{{ $per->alamat }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Detail</label>
                            <input type="detail" class="form-control " name="detail" value="{{ $per->detail }}" readonly>
                        </div>

                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('perusahaan.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data produk
                    </div>
                    <div class="card-body">
                        <form action="{{route('produk.store')}}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Code Produk</label>
                                <input type="text" class="form-control  @error('code_produk') is-invalid @enderror"
                                    name="code_produk">
                                @error('code_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Produk</label>
                                <textarea class="form-control  @error('nama_produk') is-invalid @enderror" name="nama_produk"></textarea>
                                @error('nama_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis produk</label>
                                <input type="jenis_produk" class="form-control  @error('jenis_produk') is-invalid @enderror"
                                    name="jenis_produk">
                                @error('jenis_produk')
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

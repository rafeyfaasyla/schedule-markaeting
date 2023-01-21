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
                        <form action="{{ route('produk.update', $pro->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Code produk</label>
                                <input type="text" class="form-control  @error('code_produk') is-invalid @enderror"
                                    name="code_produk" value="{{ $pro->code_produk }}">
                                @error('code_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama produk</label>
                                <input type="text" class="form-control  @error('nama_produk') is-invalid @enderror"
                                    name="nama_produk" value="{{ $pro->nama_produk }}">
                                @error('nama_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Jenis Produk</label>
                                <input type="text" class="form-control  @error('jenis_produk') is-invalid @enderror"
                                    name="jenis_produk" value="{{ $pro->jenis_produk }}">
                                @error('jenis_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">katalog</label>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <input type="text" class="form-control  @error('deskripsi') is-invalid @enderror"
                                    name="deskripsi" value="{{ $pro->deskripsi }}">
                                @error('deskripsi')
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

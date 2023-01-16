@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data pesanan
                    </div>
                    <div class="card-body">
                        <form action="{{route('jadwal.store')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="">tanggal kegiatan</label>
                                <select name="id_activity
                                    class="form-control @error('background') is-invalid @enderror" id="">
                                    <option>Pilih</option>
                                    @foreach ($act as $activity)
                                        <option value="{{ $activity->id }}">{{ $activity->tanggal }}</option>
                                    @endforeach
                                </select>
                                @error('id_activity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nama Perusahaan</label>
                                <select name="id_perusahaan"
                                    class="form-control @error('background') is-invalid @enderror" id="">
                                    <option>Pilih</option>
                                    @foreach ($per as $perusahaan)
                                        <option value="{{ $perusahaan->id }}">{{ $perusahaan->nama_perusahaan }}</option>
                                    @endforeach
                                </select>
                                @error('id_perusahaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nama Project</label>
                                <select name="id_project"
                                    class="form-control @error('background') is-invalid @enderror" id="">
                                    <option>Pilih</option>
                                    @foreach ($projec as $project)
                                        <option value="{{ $project->id }}">{{ $project->nama_project }}</option>
                                    @endforeach
                                </select>
                                @error('id_perusahaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nama Produk</label>
                                <select name="id_produk"
                                    class="form-control @error('background') is-invalid @enderror" id="">
                                    <option>Pilih</option>
                                    @foreach ($pro as $produk)
                                        <option value="{{ $produk->id }}">{{ $produk->nama_produk }}</option>
                                    @endforeach
                                </select>
                                @error('id_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                    <label for="">Kegiatan</label>
                                    <select name="id_activity"
                                        class="form-control @error('background') is-invalid @enderror" id="">
                                        <option>Pilih</option>
                                        @foreach ($act as $activity)
                                            <option value="{{ $activity->id }}">{{ $activity->kegiatan }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_activity')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                    <label for="">Status Kegiatan</label>
                                    <select name="id_activity"
                                        class="form-control @error('background') is-invalid @enderror" id="">
                                        <option>Pilih</option>
                                        @foreach ($act as $activity)
                                            <option value="{{ $activity->id }}">{{ $activity->status }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_activity')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div><br>
                                <div class="mb-3">
                                    <div class="d-grid gap-5">
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

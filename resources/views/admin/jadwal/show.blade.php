@extends('layouts.admin')
@section('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <head>
    <body>
        {{-- <form action="{{ route('detail.store') }}" method="post" enctype="multipart/form-data"> --}}
            <div class="container">
                <h5>Schadeule Marketing
                    <table class="table table-success table-striped" width="100%">
                      <thead>
                   <tr>
                        <th scope="col">Tanggal Aktivitas</th>
                        <th scope="col">{{ $schadule->activity->tanggal }}</th>
                   </tr>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">{{ $schadule->perusahaan->nama_perusahaan }}</th>
                        </tr>
                        <th scope="col">Nama Project</th>
                        <th scope="col">{{ $schadule->project->nama_project }}</th>
                        </tr>
                        <th scope="col">Nama produk</th>
                        <th scope="col">{{ $schadule->produk->nama_produk }}</th>
                        </tr>
                        <th scope="col">Kegiatan</th>
                        <th scope="col">{{ $schadule->activity->kegiatan }}</th>
                        </tr>
                        <th scope="col">Status Kegiatan</th>
                        <th scope="col">{{ $schadule->activity->status }}</th>
                        </tr>
                       </thead>

                    <tbody>
                 </tr>
            </table>
         </div>


@endsection

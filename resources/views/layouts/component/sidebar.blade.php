<div class="sidebar pe-4 pb-3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <nav class="navbar bg-light navbar-light">

                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-star me-2"></i>Schadule Marketing</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ auth::user()->name }}</h6>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Master data</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('perusahaan.index') }}" class="dropdown-item">Company</a>
                            <a href="{{ route('produk.index') }}" class="dropdown-item">product</a>
                            <a href="{{ route('project.index') }}" class="dropdown-item">Project</a>
                            <a href="{{ route('act.index') }}" class="dropdown-item">Activity</a>

                        </div>
                    </div> --}}
                    <div class="navbar-nav w-100">
                        <a href="{{ route('jadwal.index') }}" class="nav-item nav-link"><i class="far fa-file-alt me-2"></i>Schadule</a>
                    </div>
        </div>
     </nav>
</div>

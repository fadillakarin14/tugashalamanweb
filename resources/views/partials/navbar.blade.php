<nav class="navbar navbar-expand-lg navbar-dark sticky-top" id="mainNavbar">
    <div class="container">
        {{-- Brand / Logo --}}
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('landing') }}">
            <div class="navbar-logo-icon">
                <i class="bi bi-mortarboard-fill"></i>
            </div>
            <div class="navbar-brand-text">
                <span class="brand-short">SIAKAD</span>
                <span class="brand-full d-none d-xl-inline">Sistem Informasi Akademik</span>
            </div>
        </a>

        {{-- Mobile Toggle --}}
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarMain" aria-controls="navbarMain"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Nav Links --}}
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav mx-auto gap-1">
                <li class="nav-item">
                    <a class="nav-link active" href="#beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tentang">Sistem</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#fitur">Fitur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#informasi">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#jadwal">Jadwal Akademik</a>
                </li>
            </ul>

            {{-- CTA Buttons --}}
            <div class="d-flex align-items-center gap-2">
                <a href="#" class="btn btn-outline-light btn-sm px-3">Bantuan</a>
                <a href="#" class="btn btn-navbar-cta btn-sm px-3">Login SIAKAD</a>
            </div>
        </div>
    </div>
</nav>

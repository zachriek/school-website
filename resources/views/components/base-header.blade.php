<header class="base-header">
    <nav class="navbar navbar-dark bg-dark border-top border-primary">
        <div class="container">
            <div class="d-sm-flex justify-content-between align-items-center my-2" style="width: 100%; height: 100%;">
                <div class="d-flex align-items-center mb-3 mb-sm-0">
                    <i class="fa-solid fa-clock fa-xs text-light"></i>
                    <p class="text-light text-center text-sm-left mb-0 mx-2">
                        {{ date('l, F j, Y') }}
                    </p>
                </div>
                <div class="d-flex" style="column-gap: 16px;">
                    <a class="text-light" href="#">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a class="text-light" href="#">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a class="text-light" href="#">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a class="text-light" href="#">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row my-3">
            <div class="col-12">
                <img class="img-fluid" src="{{ url('assets/base/images/logo-smkn1.png') }}" alt="SMKN1"
                    width="100">
            </div>
        </div>
    </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-top border-primary shadow-sm" id="base-navbar">
        <div class="container">
            <a class="navbar-brand d-lg-none" href="#" style="font-weight: 600;">SMK Negeri 1</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse py-2 py-lg-0" id="navbarNav">
                <ul class="navbar-nav justify-content-between" style="width: 100%">
                    <li class="nav-item {{ Route::current()->getName() === 'home' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            Profil
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Sambutan</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Sejarah Sekolah</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Visi dan Misi</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Struktur Organisasi</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                    <li
                        class="nav-item dropdown {{ str_contains(Route::current()->getName(), 'majors') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            Jurusan
                        </a>
                        <div class="dropdown-menu">
                            @foreach (App\Models\Major::all() as $major)
                                <a class="dropdown-item"
                                    href="{{ route('majors.show', $major->slug) }}">{{ $major->name }}</a>
                                <div class="dropdown-divider"></div>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            Berita
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Headline</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Seputar SMK</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Kegiatan</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Artikel</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tenaga Kependidikan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ekskul</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Download</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

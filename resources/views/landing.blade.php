@extends('layouts.app')

@section('title', $siakad['name'])

@section('meta_description', 'Portal resmi ' . $siakad['name'] . '. ' . $siakad['tagline'])

@section('content')

    <!-- SECTION 1: HERO CAROUSEL -->
    <section id="beranda">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-indicators">
                @foreach($carousel as $index => $slide)
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="{{ $index }}"
                        class="{{ $index === 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}">
                    </button>
                @endforeach
            </div>

            <div class="carousel-inner">
                @foreach($carousel as $index => $slide)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="carousel-slide-bg" style="background: {{ $slide['gradient'] }}">

                            <div class="carousel-deco carousel-deco-1"></div>
                            <div class="carousel-deco carousel-deco-2"></div>
                            <div class="carousel-deco carousel-deco-3"></div>

                            <div class="container h-100">
                                <div class="row h-100 align-items-center">
                                    <div class="col-lg-8 col-md-10 carousel-content">
                                        <div class="carousel-badge mb-3">Portal Akademik Mahasiswa</div>
                                        <h1 class="carousel-title">{{ $slide['title'] }}</h1>
                                        <p class="carousel-subtitle">{{ $slide['subtitle'] }}</p>
                                        <div class="d-flex flex-wrap gap-3 mt-4">
                                            <a href="#" class="btn btn-carousel-primary">{{ $slide['cta'] }}</a>
                                            <a href="#tentang" class="btn btn-carousel-secondary">Pelajari Fitur</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <div class="carousel-ctrl-btn">
                    <i class="bi bi-chevron-left"></i>
                </div>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <div class="carousel-ctrl-btn">
                    <i class="bi bi-chevron-right"></i>
                </div>
                <span class="visually-hidden">Berikutnya</span>
            </button>
        </div>
    </section>

    <!-- SECTION 2: STATS BAR -->
    <section class="stats-bar">
        <div class="container">
            <div class="row g-0">
                @foreach($stats as $stat)
                    <div class="col-6 col-md-3">
                        <div class="stat-item">
                            <div class="stat-value">{{ $stat['value'] }}</div>
                            <div class="stat-label">{{ $stat['label'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- SECTION 3: TENTANG SIAKAD -->
    <section id="tentang" class="section-about">
        <div class="container">
            <div class="row align-items-center g-5">

                <div class="col-lg-6">
                    <div class="section-badge">Tentang Sistem</div>
                    <h2 class="section-title mt-2">{{ $siakad['name'] }}</h2>
                    <p class="section-lead">{{ $siakad['tagline'] }}</p>
                    <p class="section-body">
                        {{ $siakad['description'] }}
                    </p>
                    <p class="section-body">
                        Dengan antarmuka yang ramah pengguna serta infrastruktur server yang handal,
                        kami menjamin kelancaran segala bentuk kegiatan administrasi akademik Anda
                        sepanjang semester.
                    </p>

                    <div class="about-info-grid mt-4">
                        <div class="about-info-item">
                            <i class="bi bi-building"></i>
                            <div>
                                <strong>Institusi</strong>
                                <span>{{ $siakad['institution'] }}</span>
                            </div>
                        </div>
                        <div class="about-info-item">
                            <i class="bi bi-cpu"></i>
                            <div>
                                <strong>Versi Sistem</strong>
                                <span>{{ $siakad['version'] }}</span>
                            </div>
                        </div>
                        <div class="about-info-item">
                            <i class="bi bi-headset"></i>
                            <div>
                                <strong>Layanan Dukungan</strong>
                                <span>{{ $siakad['support'] }}</span>
                            </div>
                        </div>
                        <div class="about-info-item">
                            <i class="bi bi-shield-check"></i>
                            <div>
                                <strong>Keamanan</strong>
                                <span>Enkripsi SSL 256-bit</span>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="btn btn-primary-custom mt-4">Login Sekarang</a>
                </div>

                <div class="col-lg-6">
                    <div class="about-visual-grid">
                        <div class="about-visual-card about-visual-main">
                            <i class="bi bi-speedometer2"></i>
                            <h3>Akses Cepat & Stabil</h3>
                            <p>Arsitektur sistem dibangun dengan teknologi terkini memastikan waktu akses yang cepat
                                meskipun saat jam sibuk pengisian KRS.</p>
                        </div>
                        <div class="about-visual-card about-visual-sm" style="--card-color: #1a73e8">
                            <i class="bi bi-phone"></i>
                            <h4>Mobile Friendly</h4>
                            <p>Desain responsif yang nyaman diakses lewat smartphone.</p>
                        </div>
                        <div class="about-visual-card about-visual-sm" style="--card-color: #0f9d58">
                            <i class="bi bi-cloud-check"></i>
                            <h4>Data Tersinkronisasi</h4>
                            <p>Seluruh riwayat akademik terintegrasi secara otomatis.</p>
                        </div>
                        <div class="about-visual-card about-visual-sm" style="--card-color: #f57c00">
                            <i class="bi bi-bell"></i>
                            <h4>Notifikasi Real-time</h4>
                            <p>Pemberitahuan instan mengenai jadwal dan tagihan.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION 4: FITUR UTAMA -->
    <section id="fitur" class="section-faculties">
        <div class="container">

            <div class="text-center mb-5">
                <div class="section-badge">Fasilitas Mahasiswa</div>
                <h2 class="section-title mt-2">Fitur Unggulan SIAKAD</h2>
                <p class="section-subtitle">Beragam kemudahan untuk mengelola dan memantau kegiatan akademik Anda</p>
            </div>

            <div class="row g-4">
                @foreach($features as $feature)
                    <div class="col-xl-4 col-md-6">
                        <div class="faculty-card" style="--accent: {{ $feature['color'] }}">
                            <div class="faculty-card-header">
                                <div class="faculty-icon">
                                    <i class="bi {{ $feature['icon'] }}"></i>
                                </div>
                                <h3 class="faculty-name">{{ $feature['name'] }}</h3>
                            </div>
                            <div class="faculty-card-body">
                                <p class="faculty-desc">{{ $feature['description'] }}</p>
                            </div>
                            <div class="faculty-card-footer">
                                <a href="#" class="btn-faculty-detail">
                                    Akses Fitur Menu
                                    <i class="bi bi-arrow-right-short"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- SECTION 5: INFO TERKINI -->
    <section id="informasi" class="section-news">
        <div class="container">

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5 gap-3">
                <div>
                    <div class="section-badge">Seputar Akademik</div>
                    <h2 class="section-title mt-2 mb-0">Informasi Panduan</h2>
                </div>
                <a href="#" class="btn btn-outline-primary-custom">
                    Semua Panduan <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>

            <div class="row g-4">
                @foreach($news as $article)
                    <div class="col-lg-4 col-md-6">
                        <article class="news-card">
                            <div class="news-card-thumbnail" style="background: {{ $article['color'] }}22;">
                                <div class="news-card-icon" style="color: {{ $article['color'] }}">
                                    <i class="bi bi-info-circle"></i>
                                </div>
                                <span class="news-badge" style="background: {{ $article['color'] }}">
                                    {{ $article['category'] }}
                                </span>
                            </div>
                            <div class="news-card-body">
                                <div class="news-meta">
                                    <i class="bi bi-calendar-event"></i>
                                    <span>{{ $article['date'] }}</span>
                                </div>
                                <h3 class="news-title">{{ $article['title'] }}</h3>
                                <p class="news-excerpt">{{ $article['excerpt'] }}</p>
                                <a href="#" class="news-read-more">
                                    Baca Panduan <i class="bi bi-arrow-right-short"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- SECTION 6: JADWAL PENTING / PENGUMUMAN -->
    <section id="jadwal" class="section-announcements">
        <div class="container">
            <div class="row align-items-center g-4">

                <div class="col-lg-4">
                    <div class="section-badge">Jadwal Akademik</div>
                    <h2 class="section-title mt-2">Kalender Penting</h2>
                    <p class="section-body">
                        Perhatikan jadwal penting ini agar aktivitas akademik Anda seperti pengisian KRS, pembayaran, dan
                        ujian tidak tertinggal.
                    </p>
                    <a href="#" class="btn btn-primary-custom mt-2">Lihat Kalender Akademik</a>
                </div>

                <div class="col-lg-8">
                    <div class="announcement-list">
                        @foreach($announcements as $index => $announcement)
                            <div class="announcement-item" style="animation-delay: {{ $index * 0.1 }}s">
                                <div class="announcement-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
                                <p class="announcement-text">{{ $announcement }}</p>
                                <a href="#" class="announcement-link">
                                    <i class="bi bi-calendar-check"></i>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION 7: CTA LOGIN -->
    <section class="section-cta">
        <div class="cta-bg-pattern"></div>
        <div class="container position-relative">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="cta-title">Siap Memulai Aktivitas Akademik Anda?</h2>
                    <p class="cta-subtitle">
                        Masuk sekarang untuk mengakses Kartu Rencana Studi (KRS), melihat jadwal kuliah, mengecek nilai
                        akhir semester, dan fitur akademik lainnya!
                    </p>
                    <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                        <a href="#" class="btn btn-cta-primary">Login Mahasiswa</a>
                        <a href="#" class="btn btn-cta-secondary">Login Dosen</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const navbar = document.getElementById('mainNavbar');
            window.addEventListener('scroll', function () {
                if (window.scrollY > 50) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            });

            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const href = this.getAttribute('href');
                    if (href === '#') return;
                    const target = document.querySelector(href);
                    if (target) {
                        e.preventDefault();
                        const navHeight = navbar.offsetHeight;
                        const top = target.getBoundingClientRect().top + window.scrollY - navHeight - 10;
                        window.scrollTo({ top: top, behavior: 'smooth' });
                    }
                });
            });

            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.faculty-card, .news-card, .announcement-item, .about-visual-card').forEach(el => {
                el.classList.add('animate-on-scroll');
                observer.observe(el);
            });

            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            window.addEventListener('scroll', () => {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop - navbar.offsetHeight - 20;
                    if (window.scrollY >= sectionTop) {
                        current = section.getAttribute('id');
                    }
                });
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === '#' + current) {
                        link.classList.add('active');
                    }
                });
            });
        });
    </script>
@endpush
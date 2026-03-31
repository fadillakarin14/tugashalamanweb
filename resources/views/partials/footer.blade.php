<footer id="kontak" class="site-footer">

    {{-- Top Wave --}}
    <div class="footer-wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80" preserveAspectRatio="none">
            <path fill="#0d1b3e" d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z"/>
        </svg>
    </div>

    <div class="footer-main">
        <div class="container">
            <div class="row g-5">

                {{-- Column 1: Brand --}}
                <div class="col-lg-4 col-md-6">
                    <div class="footer-brand mb-3">
                        <div class="footer-logo-icon">
                            <i class="bi bi-mortarboard-fill"></i>
                        </div>
                        <span class="footer-brand-name">SIAKAD Terpadu</span>
                    </div>
                    <p class="footer-desc">
                        Portal resmi Sistem Informasi Akademik. Memfasilitasi seluruh sivitas akademika dengan layanan administrasi akademik yang modern, cepat, dan transparan.
                    </p>
                    <div class="footer-social d-flex gap-3 mt-4">
                        <a href="#" class="social-link" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-link" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-link" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                {{-- Column 2: Quick Links --}}
                <div class="col-lg-2 col-md-6 col-6">
                    <h6 class="footer-heading">Menu Utama</h6>
                    <ul class="footer-links">
                        <li><a href="#beranda">Beranda Portal</a></li>
                        <li><a href="#tentang">Tentang Sistem</a></li>
                        <li><a href="#fitur">Fitur Akademik</a></li>
                        <li><a href="#informasi">Panduan Sistem</a></li>
                        <li><a href="#jadwal">Kalender Akademik</a></li>
                    </ul>
                </div>

                {{-- Column 3: Layanan --}}
                <div class="col-lg-2 col-md-6 col-6">
                    <h6 class="footer-heading">Layanan Terkait</h6>
                    <ul class="footer-links">
                        <li><a href="#">E-Learning (LMS)</a></li>
                        <li><a href="#">Perpustakaan Digital</a></li>
                        <li><a href="#">Penerimaan Maba</a></li>
                        <li><a href="#">Sistem Keuangan</a></li>
                        <li><a href="#">Tracer Study</a></li>
                    </ul>
                </div>

                {{-- Column 4: Contact --}}
                <div class="col-lg-4 col-md-6">
                    <h6 class="footer-heading">Pusat Bantuan (Helpdesk)</h6>
                    <ul class="footer-contact-list">
                        <li>
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>Biro Administrasi Akademik (BAA), Gedung Rektorat Lt. 2</span>
                        </li>
                        <li>
                            <i class="bi bi-telephone-fill"></i>
                            <span>(021) 1234-5678 Ext. 101</span>
                        </li>
                        <li>
                            <i class="bi bi-envelope-fill"></i>
                            <span>helpdesk.siakad@unm.ac.id</span>
                        </li>
                        <li>
                            <i class="bi bi-clock-fill"></i>
                            <span>Jam Layanan: Senin - Jumat, 08.00 - 16.00 WIB</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    {{-- Footer Bottom --}}
    <div class="footer-bottom">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
                <p class="mb-0">
                    &copy; {{ date('Y') }} Sistem Informasi Akademik Terpadu. Hak Cipta Dilindungi.
                </p>
                <div class="d-flex gap-3">
                    <a href="#">Kebijakan Privasi</a>
                    <a href="#">Syarat Penggunaan</a>
                    <a href="#">Panduan Keamanan</a>
                </div>
            </div>
        </div>
    </div>

</footer>

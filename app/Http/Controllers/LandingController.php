<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $siakad = [
            'name'        => 'SIAKAD Terpadu',
            'tagline'     => 'Sistem Informasi Akademik Berbasis Digital',
            'description' => 'Platform portal akademik resmi yang dirancang untuk memberikan kemudahan akses informasi akademik dalam satu genggaman. Sistem ini terintegrasi secara cerdas untuk melayani mahasiswa dan dosen.',
            'version'     => 'v3.5.2',
            'support'     => 'support@siakad.unm.ac.id',
            'institution' => 'Universitas Nusantara Mandiri'
        ];

        $stats = [
            ['label' => 'Pengguna Aktif',   'value' => '15.000+'],
            ['label' => 'Mata Kuliah',      'value' => '1.200'],
            ['label' => 'Transaksi Harian', 'value' => '50.000+'],
            ['label' => 'Uptime Server',    'value' => '99.9%'],
        ];

        $features = [
            [
                'name'        => 'Kartu Rencana Studi (KRS)',
                'description' => 'Pengisian rencana studi online yang cepat, tanpa antri, dan terintegrasi dengan kapasitas kelas.',
                'icon'        => 'bi-card-checklist',
                'color'       => '#1a73e8',
            ],
            [
                'name'        => 'Kartu Hasil Studi (KHS)',
                'description' => 'Pantau nilai akhir semester dan indeks prestasi (IP) dengan transparansi penuh.',
                'icon'        => 'bi-journal-check',
                'color'       => '#0f9d58',
            ],
            [
                'name'        => 'Jadwal Perkuliahan',
                'description' => 'Notifikasi dan informasi jadwal kuliah, ruangan, dan dosen yang selalu terbarui.',
                'icon'        => 'bi-calendar-week',
                'color'       => '#e53935',
            ],
            [
                'name'        => 'Transkrip & Dokumen',
                'description' => 'Unduh transkrip nilai akademik sementara hingga akhir secara legal dan praktis.',
                'icon'        => 'bi-file-earmark-text',
                'color'       => '#f57c00',
            ],
            [
                'name'        => 'Bimbingan Online',
                'description' => 'Forum konsultasi tugas akhir dan pengajuan persetujuan kepada dosen pembimbing akademik.',
                'icon'        => 'bi-laptop',
                'color'       => '#6a1b9a',
            ],
            [
                'name'        => 'Tagihan & Pembayaran',
                'description' => 'Pantau riwayat pembayaran UKT dan status tagihan yang terhubung langsung dengan perbankan.',
                'icon'        => 'bi-wallet2',
                'color'       => '#00838f',
            ],
        ];

        $news = [
            [
                'title'    => 'Panduan Pengisian KRS Semester Ganjil 2025/2026',
                'category' => 'Panduan',
                'date'     => '10 Agustus 2025',
                'excerpt'  => 'Pelajari tata cara pengisian Kartu Rencana Studi (KRS) untuk semester ganjil agar tidak terjadi kesalahan pengambilan mata kuliah wajib.',
                'color'    => '#1a73e8',
            ],
            [
                'title'    => 'Pembaruan Keamanan Sistem SIAKAD Versi 3.5.2',
                'category' => 'Sistem Update',
                'date'     => '05 Agustus 2025',
                'excerpt'  => 'Sistem Informasi Akademik telah mendapatkan pembaruan keamanan. Seluruh pengguna diwajibkan untuk mengaktifkan autentikasi dua faktor.',
                'color'    => '#0f9d58',
            ],
            [
                'title'    => 'Fitur Baru: Pengajuan Cuti Akademik Online',
                'category' => 'Fitur Terkini',
                'date'     => '01 Agustus 2025',
                'excerpt'  => 'Kini mahasiswa dapat mengajukan cuti akademik secara langsung melalui portal SIAKAD tanpa harus mencetak berkas fisik.',
                'color'    => '#f57c00',
            ],
        ];

        $announcements = [
            'Masa pengisian KRS Semester Ganjil: 15 - 25 Agustus 2025.',
            'Batas akhir pembayaran UKT: 10 Agustus 2025 pukul 23:59 WIB.',
            'Jadwal cetak KHS Semester Genap dapat diakses mulai 5 Agustus 2025.',
            'Perkuliahan Minggu Pertama Semester Ganjil dimulai pada 1 September 2025.',
        ];

        $carousel = [
            [
                'title'    => 'Sistem Informasi Akademik Terpadu',
                'subtitle' => 'Solusi manajemen akademik yang cepat, efisien, dan transparan untuk mendukung kesuksesan mahasiswa.',
                'cta'      => 'Login ke SIAKAD',
                'gradient' => 'linear-gradient(135deg, #0d47a1 0%, #1976d2 50%, #42a5f5 100%)',
            ],
            [
                'title'    => 'Pengisian KRS Semakin Mudah',
                'subtitle' => 'Susun jadwal kuliahmu dari manapun dan kapanpun dengan antarmuka yang user-friendly.',
                'cta'      => 'Lihat Panduan',
                'gradient' => 'linear-gradient(135deg, #1b5e20 0%, #2e7d32 50%, #66bb6a 100%)',
            ],
            [
                'title'    => 'Pantau Progres Akademikmu',
                'subtitle' => 'Evaluasi hasil belajarmu setiap semester dengan laporan indeks prestasi yang detail dan real-time.',
                'cta'      => 'Cek Transkrip',
                'gradient' => 'linear-gradient(135deg, #4a148c 0%, #7b1fa2 50%, #ba68c8 100%)',
            ],
        ];

        return view('landing', compact(
            'siakad',
            'stats',
            'features',
            'news',
            'announcements',
            'carousel'
        ));
    }
}

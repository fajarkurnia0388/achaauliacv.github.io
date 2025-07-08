<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Tasya Aulia Pramesty',
            'email' => '19232267@bsi.ac.id',
            'phone' => '0816-1732-6769',
            'address' => 'Perum Villa Permata Cikampek Blok Eg.2 No.18',
            'birthplace' => 'Karawang',
            'birthdate' => '24 februari 2005',
            'gender' => 'Perempuan',
            'website' => 'https://instagram.com/tasyaachaa',
            'hobbies' => 'Bernyanyi, Menggambar, Membaca, Traveling',
            'summary' => 'Mahasiswa Aktif Universitas Bina Sarana Informatika, jurusan Teknik Informatika. Saya adalah pribadi yang kreatif, komunikatif, dan senang belajar hal baru. Aktif di organisasi kampus dan memiliki pengalaman melatih pramuka di sekolah dasar.'
        ];

        $educations = [
            [
                'degree' => 'S1 Teknik Informatika',
                'school' => 'Universitas Bina Sarana Informatika',
                'year' => '2023 - Sekarang',
            ]
        ];

        $experiences = [
            [
                'position' => 'Pelatih Pramuka',
                'company' => 'SDIT Al-Madani',
                'year' => '2023 - 2024',
                'desc' => 'Melatih dan membimbing siswa dalam kegiatan pramuka, termasuk pengembangan keterampilan kepemimpinan, kerja sama tim, dan kegiatan luar ruangan.'
            ]
        ];

        $skills = ['Bernyanyi, Menggambar, Menulis, Mengajar, Berorganisasi, Berkomunikasi, Memecahkan Masalah, Beradaptasi, Kepemimpinan'];

        return view('cv', compact('profile', 'educations', 'experiences', 'skills'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

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
            'website' => 'https://www.instagram.com/acaprmsty_/',
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

    public function downloadPdf()
    {
        $profile = [
            'name' => 'Tasya Aulia Pramesty',
            'email' => '19232267@bsi.ac.id',
            'phone' => '0816-1732-6769',
            'address' => 'Perum Villa Permata Cikampek Blok Eg.2 No.18',
            'birthplace' => 'Karawang',
            'birthdate' => '24 februari 2005',
            'gender' => 'Perempuan',
            'website' => 'https://www.instagram.com/acaprmsty_/',
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

        try {
            // Generate HTML content for PDF
            $html = view('cv-pdf', compact('profile', 'educations', 'experiences', 'skills'))->render();
            
            // Configure domPDF options
            $options = new Options();
            $options->set('defaultFont', 'Arial');
            $options->set('isRemoteEnabled', true);
            $options->set('isHtml5ParserEnabled', true);
            
            // Create domPDF instance
            $dompdf = new Dompdf($options);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            
            // Generate filename
            $filename = 'CV_Tasya_Aulia_Pramesty_' . date('Y-m-d') . '.pdf';
            
            // Get PDF content
            $pdfContent = $dompdf->output();
            
            // Return PDF response
            return response($pdfContent)
                ->header('Content-Type', 'application/pdf')
                ->header('Content-Disposition', 'attachment; filename="' . $filename . '"')
                ->header('Content-Length', strlen($pdfContent));
            
        } catch (\Exception $e) {
            // Fallback to HTML download if PDF generation fails
            $html = view('cv-pdf', compact('profile', 'educations', 'experiences', 'skills'))->render();
            $filename = 'CV_Tasya_Aulia_Pramesty_' . date('Y-m-d') . '.html';
            
            return response($html)
                ->header('Content-Type', 'text/html; charset=utf-8')
                ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
        }
    }

    public function downloadHtml()
    {
        $profile = [
            'name' => 'Tasya Aulia Pramesty',
            'email' => '19232267@bsi.ac.id',
            'phone' => '0816-1732-6769',
            'address' => 'Perum Villa Permata Cikampek Blok Eg.2 No.18',
            'birthplace' => 'Karawang',
            'birthdate' => '24 februari 2005',
            'gender' => 'Perempuan',
            'website' => 'https://www.instagram.com/acaprmsty_/',
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

        // Convert image to base64 for offline HTML
        $imagePath = public_path('foto-profile.jpg');
        $imageData = '';
        if (file_exists($imagePath)) {
            $imageData = base64_encode(file_get_contents($imagePath));
            $imageMimeType = mime_content_type($imagePath);
            $imageData = 'data:' . $imageMimeType . ';base64,' . $imageData;
        }

        // Generate HTML content for download
        $html = view('cv', compact('profile', 'educations', 'experiences', 'skills', 'imageData'))->render();
        
        // Generate filename
        $filename = 'CV_Tasya_Aulia_Pramesty_' . date('Y-m-d') . '.html';
        
        // Return HTML response
        return response($html)
            ->header('Content-Type', 'text/html; charset=utf-8')
            ->header('Content-Disposition', 'attachment; filename="' . $filename . '"')
            ->header('Content-Length', strlen($html));
    }
}

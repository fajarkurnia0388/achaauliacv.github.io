<!DOCTYPE html>
<html>
<head>
    <title>Curriculum Vitae - Tasya Aulia Pramesty</title>
    <meta charset="utf-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background: white;
            color: #333;
        }
        .header {
            text-align: center;
            border-bottom: 3px solid #e91e63;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .header h1 {
            color: #e91e63;
            margin: 0;
            font-size: 28px;
        }
        .contact-info {
            margin: 10px 0;
            color: #666;
        }
        .section {
            margin-bottom: 25px;
        }
        .section-title {
            color: #e91e63;
            font-size: 18px;
            font-weight: bold;
            border-bottom: 2px solid #f8bbd0;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }
        .profile-photo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 2px solid #e91e63;
            margin: 0 auto 15px;
            display: block;
            object-fit: cover;
        }
        .education-item, .experience-item {
            margin-bottom: 15px;
            padding: 10px;
            background: #f9f9f9;
            border-left: 4px solid #e91e63;
        }
        .education-item h3, .experience-item h3 {
            margin: 0 0 5px 0;
            color: #333;
        }
        .education-item .school, .experience-item .company {
            color: #666;
            font-style: italic;
        }
        .education-item .year, .experience-item .year {
            color: #e91e63;
            font-weight: bold;
        }
        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }
        .skill-tag {
            background: #f8bbd0;
            color: #ad1457;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 14px;
        }
        .summary {
            background: #f0f0f0;
            padding: 15px;
            border-radius: 5px;
            text-align: justify;
        }
        @media print {
            body { margin: 0; padding: 15px; }
            .section { page-break-inside: avoid; }
        }
    </style>
</head>
<body>
    <div class="header">
        @php
            $imagePath = public_path('foto-profile.jpg');
            $imageData = file_exists($imagePath) ? base64_encode(file_get_contents($imagePath)) : '';
            $imageSrc = $imageData ? 'data:image/jpeg;base64,' . $imageData : '';
        @endphp
        @if($imageSrc)
            <img src="{{ $imageSrc }}" alt="Foto Profil" class="profile-photo">
        @else
            <div class="profile-photo" style="background: #f0f0f0; display: flex; align-items: center; justify-content: center; color: #999;">
                <span>Foto</span>
            </div>
        @endif
        <h1>{{ $profile['name'] }}</h1>
        <div class="contact-info">
            <strong>Email:</strong> {{ $profile['email'] }} | 
            <strong>Telepon:</strong> {{ $profile['phone'] }} | 
            <strong>Instagram:</strong> {{ $profile['website'] }}
        </div>
        <div class="contact-info">
            <strong>Alamat:</strong> {{ $profile['address'] }}
        </div>
    </div>

    <div class="section">
        <div class="section-title">Profil Singkat</div>
        <div class="summary">{{ $profile['summary'] }}</div>
    </div>

    <div class="section">
        <div class="section-title">Informasi Pribadi</div>
        <p><strong>Tempat, Tanggal Lahir:</strong> {{ $profile['birthplace'] }}, {{ $profile['birthdate'] }}</p>
        <p><strong>Jenis Kelamin:</strong> {{ $profile['gender'] }}</p>
        <p><strong>Hobi:</strong> {{ $profile['hobbies'] }}</p>
    </div>

    <div class="section">
        <div class="section-title">Pendidikan</div>
        @foreach ($educations as $edu)
        <div class="education-item">
            <h3>{{ $edu['degree'] }}</h3>
            <div class="school">{{ $edu['school'] }}</div>
            <div class="year">{{ $edu['year'] }}</div>
        </div>
        @endforeach
    </div>

    <div class="section">
        <div class="section-title">Pengalaman Kerja</div>
        @foreach ($experiences as $exp)
        <div class="experience-item">
            <h3>{{ $exp['position'] }}</h3>
            <div class="company">{{ $exp['company'] }}</div>
            <div class="year">{{ $exp['year'] }}</div>
            <p>{{ $exp['desc'] }}</p>
        </div>
        @endforeach
    </div>

    <div class="section">
        <div class="section-title">Keahlian</div>
        <div class="skills">
            @foreach (explode(',', $skills[0]) as $skill)
                <span class="skill-tag">{{ trim($skill) }}</span>
            @endforeach
        </div>
    </div>

    <div style="text-align: center; margin-top: 40px; color: #666; font-size: 12px;">
        <p>Dokumen ini dibuat pada {{ date('d F Y') }}</p>
        <p>Untuk informasi lebih lanjut, silakan hubungi {{ $profile['email'] }}</p>
    </div>
</body>
</html>

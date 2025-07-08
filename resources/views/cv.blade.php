<!DOCTYPE html>
<html>
<head>
    <title>Curriculum Vitae - Tasya Achaa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #ffe0f0 0%, #f48fb1 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Arial, sans-serif;
            overflow-x: hidden;
        }
        .main-content {
            position: relative;
            z-index: 1;
        }
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.10);
            background: rgba(255,255,255,0.97);
            transition: transform 0.2s, box-shadow 0.2s;
            margin-bottom: 24px;
        }
        .card:hover {
            transform: translateY(-7px) scale(1.03);
            box-shadow: 0 16px 32px 0 rgba(240, 98, 146, 0.13);
        }
        .pink-header {
            color: #e91e63;
            font-weight: 700;
            letter-spacing: 1px;
        }
        .skill-badge {
            background: linear-gradient(90deg, #f8bbd0 70%, #f06292 100%);
            color: #ad1457;
            border-radius: 12px;
            padding: 7px 15px;
            margin: 4px 8px 4px 0;
            font-size: 1em;
            display: inline-block;
            font-weight: 500;
            box-shadow: 0 2px 10px rgba(233,30,99,0.06);
        }
        .avatar {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #f06292;
            margin-bottom: 10px;
            box-shadow: 0 4px 16px rgba(233,30,99,0.13);
            background: #fff;
        }
        .contact-info i {
            color: #e91e63;
            margin-right: 7px;
        }
        .section-title {
            border-left: 7px solid #f06292;
            padding-left: 12px;
            margin-bottom: 17px;
            font-size: 1.3rem;
            font-weight: 600;
            color: #ad1457;
            background: rgba(248,187,208,0.11);
            display: inline-block;
        }
        .btn-pink {
            background: linear-gradient(90deg, #f06292 60%, #f8bbd0 100%);
            color: #fff;
            border: none;
            border-radius: 12px;
            padding: 8px 22px;
            transition: background 0.2s;
        }
        .btn-pink:hover {
            background: linear-gradient(90deg, #e91e63 70%, #f8bbd0 100%);
            color: #fff;
        }
        @media (max-width: 991px) {
            .row.g-4 > [class^="col-"] {
                margin-bottom: 24px;
            }
        }
        @media (max-width: 768px) {
            .avatar {
                width: 90px;
                height: 90px;
            }
            .section-title {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container py-5 main-content">
        <div class="text-center mb-5">
            <img src="{{ asset('foto-profile.jpg') }}" alt="Foto Profil" class="avatar">
            <h1 class="pink-header mb-0">{{ $profile['name'] }}</h1>
            <p class="contact-info mt-2">
                <i class="fas fa-envelope"></i> {{ $profile['email'] }} &nbsp; | &nbsp;
                <i class="fas fa-phone"></i> {{ $profile['phone'] }} &nbsp; | &nbsp;
                <i class="fas fa-map-marker-alt"></i> {{ $profile['address'] }}
            </p>
            <a href="mailto:{{ $profile['email'] }}" class="btn btn-pink mt-2 shadow"><i class="fa fa-paper-plane"></i> Kontak Saya</a>
        </div>
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card p-4">
                    <div class="section-title">Profil Singkat</div>
                    <p>{{ $profile['summary'] }}</p>
                </div>
                <div class="card p-4">
                    <div class="section-title">Pendidikan</div>
                    <ul class="list-group list-group-flush">
                        @foreach ($educations as $edu)
                        <li class="list-group-item bg-transparent">
                            <strong>{{ $edu['degree'] }}</strong><br>
                            <span class="text-muted">{{ $edu['school'] }} &middot; {{ $edu['year'] }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card p-4">
                    <div class="section-title">Pengalaman Kerja</div>
                    <ul class="list-group list-group-flush">
                        @foreach ($experiences as $exp)
                        <li class="list-group-item bg-transparent">
                            <strong>{{ $exp['position'] }}</strong> <span class="text-muted">di {{ $exp['company'] }}</span><br>
                            <small class="text-secondary">{{ $exp['year'] }}</small>
                            <p class="mb-0 mt-1">{{ $exp['desc'] }}</p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-4">
                    <div class="section-title">Keahlian</div>
                    @foreach (explode(',', $skills[0]) as $skill)
                        <span class="skill-badge">{{ trim($skill) }}</span>
                    @endforeach
                </div>
                <div class="card p-4 text-center">
                    <div class="section-title mb-3">Download CV</div>
                    <a href="{{ asset('cv-tasya.pdf') }}" class="btn btn-pink" download>
                        <i class="fa fa-download"></i> Unduh PDF
                    </a>
                    <p class="small text-muted mt-2 mb-0">Klik tombol di atas untuk mengunduh CV versi PDF.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

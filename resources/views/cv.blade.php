<!DOCTYPE html>
<html lang="id">
<head>
    <title>Curriculum Vitae - Tasya Achaa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6366f1;
            --primary-dark: #4f46e5;
            --secondary-color: #ec4899;
            --accent-color: #f59e0b;
            --text-primary: #1f2937;
            --text-secondary: #6b7280;
            --bg-primary: #ffffff;
            --bg-secondary: #f8fafc;
            --bg-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: var(--bg-gradient);
            min-height: 100vh;
            overflow-x: hidden;
            line-height: 1.6;
            color: var(--text-primary);
        }

        .main-content {
            position: relative;
            z-index: 1;
            padding: 2rem 0;
        }

        .hero-section {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 3rem 2rem;
            margin-bottom: 2rem;
            box-shadow: var(--shadow-xl);
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: fadeInUp 0.8s ease-out;
        }

        .avatar {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid var(--primary-color);
            margin: 0 auto 1.5rem;
            display: block;
            box-shadow: var(--shadow-lg);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }

        .avatar::before {
            content: '';
            position: absolute;
            top: -8px;
            left: -8px;
            right: -8px;
            bottom: -8px;
            border-radius: 50%;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 25px 50px -12px rgba(99, 102, 241, 0.25);
        }

        .avatar:hover::before {
            opacity: 1;
        }

        .name-title {
            font-family: 'Poppins', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        .subtitle {
            font-size: 1.1rem;
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }

        .contact-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 2rem;
            animation: fadeInUp 0.8s ease-out 0.6s both;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-secondary);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-item:hover {
            color: var(--primary-color);
            text-decoration: none;
        }

        .contact-item i {
            color: var(--primary-color);
            font-size: 1.1rem;
        }

        .card {
            border: none;
            border-radius: 20px;
            box-shadow: var(--shadow-md);
            background: var(--bg-primary);
            transition: all 0.3s ease;
            margin-bottom: 1.5rem;
            overflow: hidden;
            position: relative;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
        }

        .card:hover::before {
            transform: scaleX(1);
        }

        .card-body {
            padding: 2rem;
        }

        .section-title {
            font-family: 'Poppins', sans-serif;
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 2px;
        }

        .skill-badge {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border-radius: 50px;
            padding: 0.5rem 1rem;
            margin: 0.25rem 0.5rem 0.25rem 0;
            font-size: 0.9rem;
            font-weight: 500;
            display: inline-block;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .skill-badge::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }

        .skill-badge:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .skill-badge:hover::before {
            left: 100%;
        }

        .experience-item, .education-item {
            padding: 1.5rem 0 1.5rem 2rem;
            border-bottom: 1px solid #e5e7eb;
            position: relative;
            transition: all 0.3s ease;
        }

        .experience-item:last-child, .education-item:last-child {
            border-bottom: none;
        }

        .experience-item:hover, .education-item:hover {
            background: rgba(99, 102, 241, 0.02);
            border-radius: 12px;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .experience-item::before, .education-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 2rem;
            width: 8px;
            height: 8px;
            background: var(--primary-color);
            border-radius: 50%;
            transform: translateX(-50%);
        }

        .experience-item::after, .education-item::after {
            content: '';
            position: absolute;
            left: 0;
            top: 2.5rem;
            bottom: -1.5rem;
            width: 2px;
            background: linear-gradient(to bottom, var(--primary-color), transparent);
        }

        .experience-item:last-child::after, .education-item:last-child::after {
            display: none;
        }

        .position-title, .degree-title {
            font-weight: 600;
            color: var(--text-primary);
            font-size: 1.1rem;
            margin-bottom: 0.25rem;
        }

        .company-name, .school-name {
            color: var(--text-secondary);
            font-size: 0.95rem;
            margin-bottom: 0.5rem;
        }

        .year-badge {
            background: linear-gradient(135deg, var(--accent-color), #f97316);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            display: inline-block;
            margin-bottom: 0.75rem;
        }

        .description {
            color: var(--text-secondary);
            line-height: 1.6;
            margin: 0;
        }

        .btn-modern {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            border-radius: 50px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-md);
            position: relative;
            overflow: hidden;
        }

        .btn-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }

        .btn-modern:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
            color: white;
            text-decoration: none;
        }

        .btn-modern:hover::before {
            left: 100%;
        }

        .download-section {
            text-align: center;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.05), rgba(236, 72, 153, 0.05));
            border-radius: 16px;
            padding: 2rem;
            border: 1px solid rgba(99, 102, 241, 0.1);
        }

        .floating-elements {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }

        .floating-circle {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(236, 72, 153, 0.1));
            animation: float 6s ease-in-out infinite;
        }

        .floating-circle:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-circle:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 60%;
            right: 10%;
            animation-delay: 2s;
        }

        .floating-circle:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 2rem 1rem;
                margin-bottom: 1rem;
            }

            .name-title {
                font-size: 2rem;
            }

            .avatar {
                width: 120px;
                height: 120px;
            }

            .contact-info {
                flex-direction: column;
                gap: 1rem;
            }

            .card-body {
                padding: 1.5rem;
            }

            .section-title {
                font-size: 1.2rem;
            }

            .experience-item, .education-item {
                padding-left: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .main-content {
                padding: 1rem 0;
            }

            .name-title {
                font-size: 1.75rem;
            }

            .avatar {
                width: 100px;
                height: 100px;
            }
        }
    </style>
</head>
<body>
    <!-- Floating Background Elements -->
    <div class="floating-elements">
        <div class="floating-circle"></div>
        <div class="floating-circle"></div>
        <div class="floating-circle"></div>
    </div>

    <div class="container main-content">
        <!-- Hero Section -->
        <div class="hero-section text-center">
            <img src="{{ isset($imageData) && $imageData ? $imageData : asset('foto-profile.jpg') }}" alt="Foto Profil" class="avatar">
            <h1 class="name-title">{{ $profile['name'] }}</h1>
            <p class="subtitle">Mahasiswa Teknik Informatika | Universitas Bina Sarana Informatika</p>
            
            <div class="contact-info">
                <a href="mailto:{{ $profile['email'] }}" class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <span>{{ $profile['email'] }}</span>
                </a>
                <a href="tel:{{ $profile['phone'] }}" class="contact-item">
                    <i class="fas fa-phone"></i>
                    <span>{{ $profile['phone'] }}</span>
                </a>
                <span class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>{{ $profile['address'] }}</span>
                </span>
            </div>
            
            <a href="mailto:{{ $profile['email'] }}" class="btn-modern">
                <i class="fas fa-paper-plane"></i>
                <span>Hubungi Saya</span>
            </a>
        </div>

        <div class="row g-4">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- About Section -->
                <div class="card">
                    <div class="card-body">
                        <h2 class="section-title">Tentang Saya</h2>
                        <p class="description">{{ $profile['summary'] }}</p>
                    </div>
                </div>

                <!-- Education Section -->
                <div class="card">
                    <div class="card-body">
                        <h2 class="section-title">Pendidikan</h2>
                        @foreach ($educations as $edu)
                        <div class="education-item">
                            <div class="degree-title">{{ $edu['degree'] }}</div>
                            <div class="school-name">{{ $edu['school'] }}</div>
                            <span class="year-badge">{{ $edu['year'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Experience Section -->
                <div class="card">
                    <div class="card-body">
                        <h2 class="section-title">Pengalaman</h2>
                        @foreach ($experiences as $exp)
                        <div class="experience-item">
                            <div class="position-title">{{ $exp['position'] }}</div>
                            <div class="company-name">{{ $exp['company'] }}</div>
                            <span class="year-badge">{{ $exp['year'] }}</span>
                            <p class="description">{{ $exp['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Skills Section -->
                <div class="card">
                    <div class="card-body">
                        <h2 class="section-title">Keahlian</h2>
                        @foreach (explode(',', $skills[0]) as $skill)
                            <span class="skill-badge">{{ trim($skill) }}</span>
                        @endforeach
                    </div>
                </div>

                <!-- Download Section -->
                <div class="card">
                    <div class="card-body download-section">
                        <h2 class="section-title">Download CV</h2>
                        <div class="row g-2">
                            <div class="col-6">
                                <a href="{{ route('download-cv') }}" class="btn-modern w-100 d-flex align-items-center justify-content-center" style="font-size: 0.9rem; padding: 0.6rem 1rem;">
                                    <i class="fas fa-file-pdf me-2"></i>
                                    <span>PDF</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('download-html') }}" class="btn-modern w-100 d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #10b981, #059669); font-size: 0.9rem; padding: 0.6rem 1rem;">
                                    <i class="fas fa-file-code me-2"></i>
                                    <span>HTML</span>
                                </a>
                            </div>
                        </div>
                        <p class="small text-muted mt-3 mb-0">
                            Pilih format yang diinginkan untuk mengunduh CV Anda.
                        </p>
                    </div>
                </div>

                <!-- Additional Info -->
                <div class="card">
                    <div class="card-body">
                        <h2 class="section-title">Informasi Tambahan</h2>
                        <div class="mb-3">
                            <strong class="text-primary">Tempat, Tanggal Lahir:</strong><br>
                            <span class="text-muted">{{ $profile['birthplace'] }}, {{ $profile['birthdate'] }}</span>
                        </div>
                        <div class="mb-3">
                            <strong class="text-primary">Jenis Kelamin:</strong><br>
                            <span class="text-muted">{{ $profile['gender'] }}</span>
                        </div>
                        <div class="mb-3">
                            <strong class="text-primary">Hobi:</strong><br>
                            <span class="text-muted">{{ $profile['hobbies'] }}</span>
                        </div>
                        <div class="mb-0">
                            <strong class="text-primary">Instagram:</strong><br>
                            <a href="{{ $profile['website'] }}" target="_blank" class="text-decoration-none">
                                <i class="fab fa-instagram text-primary"></i>
                                <span class="text-muted">{{ $profile['website'] }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript for enhanced interactions -->
    <script>
        // Add smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add intersection observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all cards
        document.querySelectorAll('.card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });

        // Add click effect to buttons
        document.querySelectorAll('.btn-modern').forEach(button => {
            button.addEventListener('click', function(e) {
                let ripple = document.createElement('span');
                let rect = this.getBoundingClientRect();
                let size = Math.max(rect.width, rect.height);
                let x = e.clientX - rect.left - size / 2;
                let y = e.clientY - rect.top - size / 2;
                
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.classList.add('ripple');
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });
    </script>

    <style>
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.6);
            transform: scale(0);
            animation: ripple 0.6s linear;
            pointer-events: none;
        }

        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    </style>
</body>
</html>

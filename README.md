# CV Website - Tasya Aulia Pramesty

A modern, responsive CV website built with Laravel 10 featuring PDF download functionality and beautiful UI design.

![CV Website Preview](https://img.shields.io/badge/Status-Live-brightgreen)
![Laravel Version](https://img.shields.io/badge/Laravel-10.x-red)
![PHP Version](https://img.shields.io/badge/PHP-8.1+-blue)
![License](https://img.shields.io/badge/License-MIT-green)

## 🌟 Features

-   ✅ **Responsive Design** - Beautiful UI that works on all devices
-   ✅ **PDF Download** - Generate and download CV as PDF
-   ✅ **Modern UI** - Clean, professional design with Bootstrap
-   ✅ **Fast Loading** - Optimized for performance
-   ✅ **SEO Friendly** - Proper meta tags and structure
-   ✅ **Cross-browser Compatible** - Works on all modern browsers

## 🚀 Quick Start

### Prerequisites

-   PHP 8.1 or higher
-   Composer
-   Git

### Installation

#### Method 1: Automated Setup (Windows)

```bash
# Clone the repository
git clone https://github.com/fajarkurnia0388/achaauliacv.github.io.git
cd achaauliacv.github.io

# Run automated setup
setup.bat
```

#### Method 2: Manual Setup

```bash
# Clone the repository
git clone https://github.com/fajarkurnia0388/achaauliacv.github.io.git
cd achaauliacv.github.io

# Install dependencies
composer install --no-dev --optimize-autoloader

# Setup environment
copy .env.example .env
php artisan key:generate

# Start the server
php artisan serve
```

### Access the Website

Open your browser and go to: `http://127.0.0.1:8000`

## 📁 Project Structure

```
achaauliacv.github.io/
├── app/
│   └── Http/Controllers/
│       └── CvController.php          # Main CV controller
├── resources/
│   └── views/
│       ├── cv.blade.php              # Main CV page
│       └── cv-pdf.blade.php          # PDF template
├── public/
│   ├── foto-profile.jpg              # Profile photo
│   └── cv-tasya.pdf                  # Sample CV PDF
├── routes/
│   └── web.php                       # Route definitions
├── setup.bat                         # Windows setup script
└── SETUP_INSTRUCTIONS.md            # Detailed setup guide
```

## 🛠️ Technology Stack

-   **Backend**: Laravel 10
-   **Frontend**: HTML5, CSS3, Bootstrap 5
-   **PDF Generation**: domPDF
-   **PHP Version**: 8.1+
-   **Database**: SQLite (default)

## 📋 Available Routes

| Route          | Method | Description        |
| -------------- | ------ | ------------------ |
| `/`            | GET    | Main CV page       |
| `/cv`          | GET    | CV page (alias)    |
| `/download-cv` | GET    | Download CV as PDF |

## 🎨 Customization

### Updating Personal Information

Edit the data in `app/Http/Controllers/CvController.php`:

```php
$profile = [
    'name' => 'Your Name',
    'email' => 'your.email@example.com',
    'phone' => 'your-phone-number',
    // ... other profile data
];
```

### Changing Profile Photo

1. Replace `public/foto-profile.jpg` with your photo
2. Keep the same filename or update the path in the controller

### Modifying Design

-   Edit `resources/views/cv.blade.php` for main page styling
-   Edit `resources/views/cv-pdf.blade.php` for PDF styling

## 🔧 Troubleshooting

### Common Issues

**Error: "vendor/autoload.php not found"**

```bash
composer install
```

**Error: "Application key not set"**

```bash
php artisan key:generate
```

**Error: "Class not found"**

```bash
composer dump-autoload
```

**PDF download not working**

-   Check if domPDF is installed: `composer show dompdf/dompdf`
-   Verify file permissions on storage directory

### Getting Help

1. Check the [SETUP_INSTRUCTIONS.md](SETUP_INSTRUCTIONS.md) file
2. Ensure all prerequisites are installed
3. Verify PHP and Composer versions

## 📱 Screenshots

### Desktop View

-   Clean, professional layout
-   Easy-to-read typography
-   Responsive navigation

### Mobile View

-   Mobile-optimized design
-   Touch-friendly interface
-   Fast loading times

## 🚀 Deployment

### GitHub Pages

This project can be deployed to GitHub Pages using GitHub Actions or manual deployment.

### Shared Hosting

1. Upload all files to your hosting directory
2. Run `composer install --no-dev --optimize-autoloader`
3. Set up your web server to point to the `public` directory
4. Configure your database if needed

### VPS/Dedicated Server

1. Clone the repository
2. Install dependencies
3. Configure web server (Apache/Nginx)
4. Set up SSL certificate
5. Configure domain and DNS

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👤 Author

**Tasya Aulia Pramesty**

-   Email: 19232267@bsi.ac.id
-   GitHub: [@tasyaachaa](https://github.com/tasyaachaa)
-   Editor: [@fajarkurnia0388](https://github.com/fajarkurnia0388)

## 🙏 Acknowledgments

-   Laravel Framework
-   Bootstrap for UI components
-   domPDF for PDF generation
-   All contributors and supporters

---

⭐ **Star this repository if you found it helpful!**

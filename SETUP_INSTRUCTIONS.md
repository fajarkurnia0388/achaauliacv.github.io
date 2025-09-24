# CV Website - Setup Instructions

## Quick Setup (Windows)

### Method 1: Automated Setup

1. Double-click `setup.bat`
2. Wait for setup to complete
3. Run `php artisan serve`
4. Open http://127.0.0.1:8000

### Method 2: Manual Setup

#### Prerequisites

-   PHP 8.1 or higher
-   Composer
-   Git

#### Steps

1. **Clone the repository**

    ```bash
    git clone https://github.com/fajarkurnia0388/achaauliacv.github.io.git
    cd achaauliacv.github.io
    ```

2. **Install dependencies**

    ```bash
    composer install --no-dev --optimize-autoloader
    ```

3. **Setup environment**

    ```bash
    copy .env.example .env
    php artisan key:generate
    ```

4. **Start the server**

    ```bash
    php artisan serve
    ```

5. **Open in browser**
    - Go to: http://127.0.0.1:8000

## Troubleshooting

### Error: "vendor/autoload.php not found"

**Solution:** Run `composer install`

### Error: "Application key not set"

**Solution:** Run `php artisan key:generate`

### Error: "Class not found"

**Solution:** Run `composer dump-autoload`

### Error: "Zip extension missing"

**Note:** This is normal, Composer will use Git clone instead

## Features

-   ✅ Responsive CV Website
-   ✅ PDF Download Functionality
-   ✅ Modern UI with Bootstrap
-   ✅ Laravel 10 Framework

## Support

If you encounter any issues, please check:

1. PHP version (8.1+)
2. Composer installation
3. File permissions
4. Internet connection (for dependencies)

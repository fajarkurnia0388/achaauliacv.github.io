@echo off
echo ========================================
echo    CV Website Setup Script
echo ========================================
echo.

echo [1/4] Checking PHP...
php --version
if %errorlevel% neq 0 (
    echo ERROR: PHP not found! Please install PHP first.
    pause
    exit /b 1
)
echo PHP found!
echo.

echo [2/4] Checking Composer...
composer --version
if %errorlevel% neq 0 (
    echo ERROR: Composer not found! Please install Composer first.
    pause
    exit /b 1
)
echo Composer found!
echo.

echo [3/4] Installing dependencies...
composer install --no-dev --optimize-autoloader
if %errorlevel% neq 0 (
    echo ERROR: Failed to install dependencies!
    pause
    exit /b 1
)
echo Dependencies installed successfully!
echo.

echo [4/4] Setting up environment...
if not exist .env (
    copy .env.example .env
    echo Created .env file from template
) else (
    echo .env file already exists
)

php artisan key:generate
if %errorlevel% neq 0 (
    echo ERROR: Failed to generate application key!
    pause
    exit /b 1
)
echo Application key generated!
echo.

echo ========================================
echo    Setup completed successfully!
echo ========================================
echo.
echo To start the server, run:
echo    php artisan serve
echo.
echo Then open: http://127.0.0.1:8000
echo.
pause

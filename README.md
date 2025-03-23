# Laravel Jobs Project

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About The Project

A modern job board platform built with Laravel, designed to connect employers and job seekers. This platform provides an intuitive interface for posting jobs, searching positions, and managing applications.

## Features

- 🔐 User Authentication (Job Seekers & Employers)
- 📝 Job Posting Management
- 🔍 Advanced Job Search & Filtering
- 📑 Job Applications Handling
- 👤 User Profile Management
- 📊 Dashboard for Employers
- 📨 Email Notifications
- 🎯 Job Categories & Tags

## Tech Stack

- **Framework:** Laravel 10.x
- **Database:** MySQL
- **Frontend:** Blade Templates, JavaScript
- **Styling:** CSS/SCSS
- **Authentication:** Laravel Breeze/Sanctum
- **Email:** Laravel Mail

## Requirements

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL
- BCMath PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/laravel-jobs-project.git
cd laravel-jobs-project
```

2. Install PHP dependencies:
```bash
composer install
```

3. Set up environment variables:
```bash
cp .env.example .env
php artisan key:generate
```

4. Configure your database in `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

5. Run migrations and seeders:
```bash
php artisan migrate --seed
```

6. Start the development server:
```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

## Project Structure

```
laravel-jobs-project/
├── app/
│   ├── Http/
│   │   ├── Controllers/    # Controllers
│   │   └── Middleware/     # Middleware
│   ├── Models/            # Eloquent Models
│   └── Services/          # Business Logic
├── database/
│   ├── migrations/        # Database Migrations
│   └── seeders/          # Database Seeders
├── resources/
│   ├── views/            # Blade Templates
│   ├── js/              # JavaScript
│   └── css/             # Stylesheets
├── routes/              # Route Definitions
└── tests/              # Test Files
```

## Available Routes

- `/` - Homepage with featured jobs
- `/jobs` - Job listings
- `/jobs/create` - Create new job posting
- `/dashboard` - User dashboard
- `/profile` - User profile management
- `/applications` - Job applications management


## Acknowledgments

- [Laravel](https://laravel.com) - The web framework used
- [Laravel Breeze](https://laravel.com/docs/starter-kits#laravel-breeze) - Authentication starter kit
- [Tailwind CSS](https://tailwindcss.com) - For styling
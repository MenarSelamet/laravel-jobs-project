# Laravel Jobs Board

A modern job board platform built with Laravel, designed to help employers post jobs and job seekers find opportunities. Features a clean, responsive interface with a focus on usability and modern design.

## Features

- 🎯 **Job Listings**
  - Create, edit, and delete job postings
  - Tag-based categorization
  - Salary information display
  - Rich text job descriptions

- 🎨 **Modern UI/UX**
  - Responsive design that works on all devices
  - Clean and intuitive navigation
  - Mobile-friendly interface
  - Latest jobs showcase on homepage

- 👥 **User Management**
  - User authentication system
  - Secure login and registration
  - Protected job management routes

- 🔍 **Search & Discovery**
  - Browse all job listings
  - Latest jobs featured on homepage
  - Detailed job view pages

## Tech Stack

- **Framework:** Laravel 10.x
- **Frontend:** 
  - Blade Templates
  - Tailwind CSS
  - Alpine.js
- **Database:** MySQL
- **Authentication:** Laravel Breeze

## Getting Started

1. Clone the repository:
```bash
git clone https://github.com/your-username/laravel-jobs-project.git
cd laravel-jobs-project
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Set up environment:
```bash
cp .env.example .env
php artisan key:generate
```

4. Configure database in `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_jobs
DB_USERNAME=root
DB_PASSWORD=
```

5. Run migrations:
```bash
php artisan migrate
```

6. Start the development server:
```bash
php artisan serve
```

## Usage

1. Register as an employer to create job listings
2. Add job details including title, description, salary, and tags
3. Browse jobs from the homepage or jobs page
4. Use the mobile-responsive navigation to access all features


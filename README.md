# Laravel 11 + Tailwind CSS Project

## Setup Instructions

### Prerequisites
- PHP 8.2+
- Composer
- Node.js & npm
- Git (untuk repository)

### Installation

1. **Install dependencies:**
```bash
composer install
npm install
```

2. **Environment setup:**
```bash
cp .env.example .env
php artisan key:generate
```

3. **Database setup:**
```bash
php artisan migrate
```

4. **Build assets:**
```bash
npm run dev  # untuk development
npm run build  # untuk production
```

5. **Start development server:**
```bash
php artisan serve
```

### Git & GitHub Setup

1. **Install Git** (jika belum terinstal)
2. **Inisialisasi repository:**
```bash
git init
git add .
git commit -m "Initial commit: Laravel 11 + Tailwind CSS setup"
```

3. **Create GitHub repository:**
- Buka github.com dan buat repository baru
- Hubungkan dengan commands:
```bash
git remote add origin https://github.com/username/repository-name.git
git branch -M main
git push -u origin main
```

## Features
- Laravel 11
- Tailwind CSS dengan Vite
- Database SQLite default
- Authentication scaffolding ready

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# 🚀 Run Commands - Smart Service Booking Management System

Ye Laravel 12.0 application ko run karne ke liye complete guide hai.

## 📋 Prerequisites (Requirements)

- **PHP 8.2+** install hona chahiye
- **Composer 2.0+** install hona chahiye
- **Node.js 18.0+** aur **NPM 9.0+** install hona chahiye
- **MySQL 8.0+** ya **SQLite 3.0+** database
- **Redis** (optional, caching aur queues ke liye)

---

## 🔧 Setup Commands (Pehli Baar Run Karne Ke Liye)

### 1. Complete Setup (Ek Saath Sab Kuch)

```bash
composer run setup
```

_Ye command automatically kar degi:_

- Composer dependencies install
- .env file create
- Application key generate
- Database migrations
- NPM dependencies install
- Assets build

### 2. Manual Setup (Step by Step)

```bash
# 1. PHP dependencies install
composer install

# 2. Environment file copy
cp .env.example .env

# 3. Application key generate
php artisan key:generate

# 4. Database configure (.env file mein)
# Database settings add karna

# 5. Database migrations
php artisan migrate

# 6. Database seeding (optional)
php artisan db:seed

# 7. Node.js dependencies install
npm install

# 8. Assets build
npm run build
```

---

## 🚀 Development Server Start Karne Ke Commands

### 1. Complete Development Server (Recommended)

```bash
composer run dev
```

_Ye command start kar degi:_

- Laravel development server (http://localhost:8000)
- Queue worker
- Log monitoring (pail)
- Vite development server

### 2. Simple Laravel Server

```bash
php artisan serve
```

_Server start hoga:_ `http://localhost:8000`

### 3. Separate Services Start Karne Ke Liye

```bash
# Terminal 1: Laravel server
php artisan serve

# Terminal 2: Vite development server
npm run dev

# Terminal 3: Queue worker (optional)
php artisan queue:work

# Terminal 4: Log monitoring (optional)
php artisan pail
```

---

## 🔄 Development Ke Dauran Regularly Use Hone Wale Commands

### Assets Build Karne Ke Liye

```bash
# Development assets build
npm run dev

# Production assets build
npm run build
```

### Database Related Commands

```bash
# Fresh start ke liye
php artisan migrate:fresh --seed

# Single migration run karne ke liye
php artisan migrate --path=database/migrations/2024_01_01_000000_create_users_table.php

# Migration rollback karne ke liye
php artisan migrate:rollback

# Database status check karne ke liye
php artisan migrate:status
```

### Cache Clear Karne Ke Liye

```bash
# Sab cache clear
php artisan optimize:clear

# Specific cache clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear
```

### Testing Commands

```bash
# All tests run
composer run test
# ya
php artisan test

# Specific test run
php artisan test --filter ServiceTest

# Test with coverage
php artisan test --coverage
```

## Quick Start Commands (Copy-Paste)

```bash
# 1. Install dependencies
composer install && npm install

# 2. Setup environment
copy .env.example .env && php artisan key:generate

# 3. अब सिर्फ एक command चलाएं (ONE COMMAND ONLY)
npm run start
```

---

## 🌐 Production Deployment Commands

### 1. Production Optimization

```bash
# Environment set
APP_ENV=production
APP_DEBUG=false

# Cache optimize
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```

### 2. Production Assets Build

```bash
npm run build
```

### 3. Queue Worker Start

```bash
php artisan queue:work --daemon
```

---

## 🐳 Docker Commands (Agar Docker Use Kar Rahe Hain)

### Docker Compose Start

```bash
docker-compose up -d
```

### Docker Mein Migrations Run

```bash
docker-compose exec app php artisan migrate
```

### Docker Mein Commands Run

```bash
docker-compose exec app php artisan <command>
```

---

## 🛠️ Troubleshooting Commands

### Common Issues Fix

```bash
# Permission issues fix
chmod -R 775 storage bootstrap/cache

# Composer autoloader regenerate
composer dump-autoload

# Node modules fresh install
rm -rf node_modules package-lock.json
npm install

# Laravel fresh install
composer install --no-scripts
php artisan package:discover --ansi
```

### Port Issues

```bash
# Different port pe server start
php artisan serve --port=8080

# Port check karne ke liye
netstat -an | grep 8000
```

---

## 📱 Quick Start Summary

### New Project Setup (5 Minutes)

```bash
# 1. Clone karke folder mein jao
cd SmartManagementSystem

# 2. Complete setup run karo
composer run setup

# 3. Development server start karo
composer run dev
```

### Daily Development Start

```bash
# Terminal mein project folder mein jao
cd SmartManagementSystem

# Development server start
composer run dev
```

### Application Access

- **Main Application**: http://localhost:8000
- **Admin Dashboard**: http://localhost:8000/dashboard (admin role se)
- **API Documentation**: http://localhost:8000/api/documentation

---

## 🔥 Pro Tips

1. **Always use `composer run dev`** for development - ye sab necessary services start kar deta hai
2. **Database changes ke baad** migration zaroor run karo
3. **CSS/JS changes ke baad** `npm run dev` run karo for live reload
4. **Production deploy se pehle** `php artisan optimize:clear` run karo
5. **Error debugging ke liye** `php artisan pail` use karo for real-time logs

---

## 📞 Help Commands

```bash
# Laravel commands list
php artisan list

# Specific command help
php artisan help serve

# Composer scripts list
composer run --list
```

---

**🎉 Ready to Go! Ab aapka Smart Service Booking Management System ready hai run karne ke liye!**

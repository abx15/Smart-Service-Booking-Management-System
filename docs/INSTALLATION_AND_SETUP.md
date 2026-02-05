# Installation & Setup Guide

This comprehensive guide covers everything from initial installation to running the application in development and production environments.

## 📋 Prerequisites

Ensure your system meets the following requirements:

- **PHP**: 8.2 or higher
- **Composer**: 2.0+
- **Node.js**: 18.0+ & **NPM**: 9.0+
- **Database**: MySQL 8.0+ or SQLite 3.0+
- **Redis**: (Optional) For caching and queues.

---

## 🚀 Quick Start (Development)

### Method 1: The One-Liner (Recommended)

After installing dependencies, you can start the entire stack with one command:

```bash
npm run start
```

This concurrently starts the Laravel server (`php artisan serve`) and Vite dev server (`npm run dev`).

### Method 2: Manual Start

Run these in separate terminals:
**Terminal 1 (Laravel):**

```bash
php artisan serve
```

**Terminal 2 (Vite):**

```bash
npm run dev
```

---

## 🛠️ Installation Steps (First Time Setup)

Follow these steps to set up the project from scratch.

### 1. Clone & Dependencies

```bash
# Clone the repo
git clone https://github.com/your-username/Smart-Service-Booking-Management-System.git
cd Smart-Service-Booking-Management-System

# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

### 2. Environment Configuration

```bash
# Create .env file
cp .env.example .env

# Generate App Key
php artisan key:generate
```

### 3. Database Setup

Configure your database credentials in the `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=
```

Then run migrations:

```bash
php artisan migrate
# Optional: Seed data
php artisan db:seed
```

### 4. Build Assets

```bash
npm run build
```

---

## 🌐 Accessing the Application

- **Main App**: [http://localhost:8000](http://localhost:8000)
- **Admin Dashboard**: [http://localhost:8000/dashboard](http://localhost:8000/dashboard) (requires Admin account)
- **Worker Dashboard**: [http://localhost:8000/worker/dashboard](http://localhost:8000/worker/dashboard) (requires Worker account)
- **Vite Server**: [http://localhost:5173](http://localhost:5173) (background asset serving)

---

## ⚠️ Troubleshooting Common Issues

### "Vite manifest not found" / White Screen

**Solution**: Ensure the Vite server is running (`npm run dev`) OR build assets for production (`npm run build`).

### Database Connection Refused

**Solution**: Check your `.env` credentials and ensure your MySQL server is running.

### Port Conflicts

If port 8000 is busy:

```bash
php artisan serve --port=8080
```

### Permission Issues (Linux/Mac)

```bash
chmod -R 775 storage bootstrap/cache
```

---

## 🚢 Production Deployment

### Optimization Commands

Run these on your production server:

```bash
# Set environment
export APP_ENV=production
export APP_DEBUG=false

# Optimize caches
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize

# Build assets
npm run build
```

### Queue Worker

Keep the queue worker running:

```bash
php artisan queue:work --daemon
```

### Docker Support

If using Docker:

```bash
docker-compose up -d
docker-compose exec app php artisan migrate
```

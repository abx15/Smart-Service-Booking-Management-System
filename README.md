# 🎯 Smart Service Booking Management System

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.0-FF2D20?style=for-the-badge&logo=laravel" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php" alt="PHP">
  <img src="https://img.shields.io/badge/TailwindCSS-3.1+-38B2AC?style=for-the-badge&logo=tailwindcss" alt="TailwindCSS">
  <img src="https://img.shields.io/badge/MySQL/SQLite-4479A1?style=for-the-badge&logo=mysql" alt="Database">
  <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" alt="License">
</p>

A comprehensive, modern service booking management system built with Laravel 12.0. This platform enables service providers to manage their offerings, handle bookings, process payments, and maintain customer relationships efficiently.

## 🌟 Key Features

### 👥 Multi-Role System
- **Admin**: Complete system oversight and management
- **Service Provider**: Manage services, bookings, and availability
- **Customer**: Browse services, book appointments, and manage bookings

### 🛠️ Service Management
- Service categories and subcategories
- Flexible pricing tiers and packages
- Service descriptions with images
- FAQ system for each service
- Provider availability management

### 📅 Booking System
- Real-time booking calendar
- Time slot management
- Booking status tracking
- Automated notifications
- Booking history and analytics

### 💳 Payment Integration
- Multiple payment methods
- Invoice generation
- Payment status tracking
- Coupon and discount system
- Transaction history

### 📊 Analytics & Reporting
- Booking statistics
- Revenue tracking
- Customer insights
- Provider performance metrics
- Export capabilities

### 🔔 Notification System
- Email notifications
- In-app alerts
- SMS integration ready
- Real-time updates

## 🚀 Technology Stack

### Backend
- **Framework**: Laravel 12.0
- **Language**: PHP 8.2+
- **Database**: MySQL/SQLite
- **Authentication**: Laravel Breeze
- **Queue System**: Redis/Database

### Frontend
- **CSS Framework**: TailwindCSS 3.1+
- **JavaScript**: Alpine.js 3.4+
- **Build Tool**: Vite 7.0+
- **Icons**: Lucide Icons

### Development Tools
- **Testing**: PHPUnit 11.5+
- **Code Style**: Laravel Pint
- **PDF Generation**: DomPDF
- **Image Processing**: Intervention Image

## 📋 Requirements

- PHP 8.2 or higher
- Composer 2.0+
- Node.js 18.0+ and NPM 9.0+
- MySQL 8.0+ or SQLite 3.0+
- Redis (optional, for caching and queues)

## 🛠️ Installation

### 1. Clone the Repository
```bash
git clone https://github.com/your-username/Smart-Service-Booking-Management-System.git
cd Smart-Service-Booking-Management-System
```

### 2. Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 3. Environment Configuration
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure your database in .env file
```

### 4. Database Setup
```bash
# Run migrations
php artisan migrate

# Seed the database (optional)
php artisan db:seed
```

### 5. Build Assets
```bash
npm run build
```

### 6. Start Development Server
```bash
# Using Laravel's built-in server
php artisan serve

# Or use the development script
composer run dev
```

## 📁 Project Structure

```
├── app/
│   ├── Http/Controllers/          # Application controllers
│   ├── Models/                    # Eloquent models
│   ├── View/Components/           # Blade components
│   └── Helpers/                   # Custom helper functions
├── database/
│   ├── migrations/                # Database migrations
│   ├── seeders/                   # Database seeders
│   └── factories/                 # Model factories
├── resources/
│   ├── views/                     # Blade templates
│   ├── js/                        # JavaScript files
│   └── css/                       # CSS files
├── routes/
│   ├── web.php                    # Web routes
│   ├── api.php                    # API routes
│   └── auth.php                   # Authentication routes
└── public/                        # Public assets
```

## 🔧 Configuration

### Environment Variables
Key environment variables to configure:

```env
# Application
APP_NAME="Smart Service Booking"
APP_URL=http://localhost

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=smart_booking
DB_USERNAME=root
DB_PASSWORD=

# Mail
MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null

# Cache
CACHE_STORE=redis

# Queue
QUEUE_CONNECTION=redis
```

## 📖 Usage

### Admin Dashboard
- Access: `/dashboard` (with admin role)
- Features: User management, service oversight, analytics

### Provider Portal
- Access: `/dashboard` (with provider role)
- Features: Service management, booking handling, availability settings

### Customer Interface
- Access: `/` (public) and `/dashboard` (authenticated)
- Features: Service browsing, booking, profile management

## 🧪 Testing

Run the test suite:

```bash
# Run all tests
php artisan test

# Run specific test
php artisan test --filter ServiceTest

# Generate coverage report
php artisan test --coverage
```

## 📝 API Documentation

The system provides RESTful APIs for:

- Service management
- Booking operations
- User authentication
- Payment processing

API endpoints are prefixed with `/api/v1/`.

## 🔒 Security Features

- CSRF protection
- XSS prevention
- SQL injection protection
- Rate limiting
- Input validation
- Secure password hashing
- Role-based access control

## 🚀 Deployment

### Production Setup

1. **Environment Configuration**:
   ```bash
   APP_ENV=production
   APP_DEBUG=false
   ```

2. **Optimize Application**:
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   php artisan optimize
   ```

3. **Set Up Queue Worker**:
   ```bash
   php artisan queue:work --daemon
   ```

### Docker Deployment

```bash
# Build and run with Docker Compose
docker-compose up -d

# Run migrations
docker-compose exec app php artisan migrate
```

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

### Development Guidelines

- Follow PSR-12 coding standards
- Write tests for new features
- Update documentation
- Use meaningful commit messages
- Keep code clean and readable

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgments

- Laravel Framework and community
- TailwindCSS team
- All contributors and users

## 📞 Support

For support and questions:

- 📧 Email: support@example.com
- 🐛 Issues: [GitHub Issues](https://github.com/your-username/Smart-Service-Booking-Management-System/issues)
- 📖 Documentation: [Wiki](https://github.com/your-username/Smart-Service-Booking-Management-System/wiki)

## 🔄 Changelog

### Version 1.0.0 (2026-01-29)
- Initial release
- Core booking functionality
- Multi-role authentication
- Payment integration
- Admin dashboard
- Provider portal
- Customer interface

---

<p align="center">
  Made with ❤️ using Laravel
</p>

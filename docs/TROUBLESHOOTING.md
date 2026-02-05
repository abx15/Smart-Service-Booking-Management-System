# Troubleshooting Guide

## Common Issues and Solutions

### Installation Issues

#### Composer Install Fails
```bash
# Clear composer cache
composer clear-cache

# Update composer
composer self-update

# Install with specific options
composer install --no-scripts --ignore-platform-reqs
```

#### Database Migration Errors
```bash
# Check database connection
php artisan tinker
>>> DB::connection()->getPdo()

# Reset migrations
php artisan migrate:reset
php artisan migrate

# Check migration status
php artisan migrate:status
```

#### Permission Issues
```bash
# Set proper permissions
sudo chown -R $USER:$USER /path/to/project
chmod -R 755 /path/to/project
chmod -R 777 /path/to/project/storage
chmod -R 777 /path/to/project/bootstrap/cache
```

### Runtime Issues

#### 500 Internal Server Error
1. Check Laravel logs: `tail -f storage/logs/laravel.log`
2. Enable debug mode in `.env`: `APP_DEBUG=true`
3. Clear caches: `php artisan cache:clear`
4. Check file permissions

#### White Screen of Death
```bash
# Enable error reporting
php -r "ini_set('display_errors', 1); error_reporting(E_ALL); require_once 'public/index.php';"

# Check PHP version
php -v

# Check required extensions
php -m | grep -E "(mbstring|xml|mysql|gd)"
```

#### Database Connection Issues
```bash
# Test database connection
php artisan tinker
>>> DB::connection()->getDatabaseName()

# Check database credentials
cat .env | grep DB_

# Restart database service
sudo systemctl restart mysql
```

### Performance Issues

#### Slow Page Loading
```bash
# Optimize autoloader
composer dump-autoload --optimize

# Cache configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Check query performance
php artisan tinker
>>> DB::enableQueryLog();
>>> // Run your queries
>>> DB::getQueryLog();
```

#### Memory Issues
```bash
# Increase PHP memory limit
php -d memory_limit=512M artisan your-command

# Check memory usage
php -r "echo memory_get_usage(true) / 1024 / 1024 . ' MB';"
```

### Queue Issues

#### Jobs Not Processing
```bash
# Check queue configuration
php artisan queue:failed-table

# Restart queue workers
php artisan queue:restart

# Monitor queue
php artisan queue:work --timeout=60
```

#### Failed Jobs
```bash
# List failed jobs
php artisan queue:failed

# Retry failed jobs
php artisan queue:retry all

# Clear failed jobs
php artisan queue:flush
```

### Email Issues

#### Mail Not Sending
```bash
# Test mail configuration
php artisan tinker
>>> Mail::raw('Test email', function($message) {
>>>     $message->to('test@example.com')->subject('Test');
>>> });

# Check mail configuration
php artisan config:cache
php artisan tinker
>>> config('mail');
```

### Cache Issues

#### Cache Not Working
```bash
# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Test cache
php artisan tinker
>>> Cache::put('test', 'value', 60);
>>> Cache::get('test');
```

### SSL/HTTPS Issues

#### Mixed Content Errors
```bash
# Force HTTPS in .env
APP_URL=https://yourdomain.com

# Update asset URLs
php artisan asset:publish --force
```

#### Certificate Issues
```bash
# Check SSL certificate
openssl s_client -connect yourdomain.com:443

# Test HTTPS locally
php artisan serve --host=0.0.0.0 --port=8000
```

### Development Issues

#### Vite Not Working
```bash
# Clear Vite cache
npm run build --force

# Reinstall dependencies
rm -rf node_modules package-lock.json
npm install

# Check Vite configuration
npm run dev -- --debug
```

#### Hot Module Replacement Issues
```bash
# Clear HMR cache
rm -rf public/hot

# Restart dev server
npm run dev
```

### Debugging Tools

#### Laravel Debugbar
```bash
composer require barryvdh/laravel-debugbar --dev
php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"
```

#### Telescope
```bash
composer require laravel/telescope --dev
php artisan telescope:install
php artisan migrate
```

### Log Analysis

#### Common Log Locations
- Application logs: `storage/logs/laravel.log`
- Web server logs: `/var/log/nginx/error.log` or `/var/log/apache2/error.log`
- PHP logs: `/var/log/php_errors.log`

#### Log Monitoring
```bash
# Real-time log monitoring
tail -f storage/logs/laravel.log

# Filter errors
grep -i error storage/logs/laravel.log

# Count error types
grep -o "ERROR: [A-Z_]*" storage/logs/laravel.log | sort | uniq -c
```

### Performance Monitoring

#### Laravel Telescope
```bash
# Monitor requests
php artisan telescope:install

# Clear telescope data
php artisan telescope:clear
```

#### Custom Monitoring
```bash
# Check response time
curl -w "@curl-format.txt" -o /dev/null -s http://yourdomain.com

# Monitor memory usage
watch -n 1 "ps aux | grep php-fpm"
```

### Security Issues

#### Check Vulnerabilities
```bash
# Check composer dependencies
composer audit

# Check npm dependencies
npm audit

# Fix vulnerabilities
composer audit --fix
npm audit fix
```

### Getting Help

#### Community Resources
- [Laravel Documentation](https://laravel.com/docs)
- [Laracasts](https://laracasts.com)
- [Stack Overflow](https://stackoverflow.com/questions/tagged/laravel)
- [Laravel Discord](https://discord.gg/laravel)

#### Reporting Issues
1. Check existing issues first
2. Provide detailed error information
3. Include steps to reproduce
4. Share relevant code snippets
5. Mention your environment details

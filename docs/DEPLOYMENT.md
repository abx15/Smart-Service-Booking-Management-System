# Deployment Guide

## Production Deployment

### Server Requirements
- Ubuntu 20.04+ or CentOS 8+
- PHP 8.2+ with required extensions
- MySQL 8.0+ or MariaDB 10.6+
- Nginx 1.18+ or Apache 2.4+
- Redis 6.0+ (optional)
- SSL Certificate

### Environment Setup

#### 1. Clone Repository
```bash
git clone https://github.com/your-username/Smart-Service-Booking-Management-System.git
cd Smart-Service-Booking-Management-System
```

#### 2. Install Dependencies
```bash
composer install --no-dev --optimize-autoloader
npm install --production
npm run build
```

#### 3. Configure Environment
```bash
cp .env.example .env
php artisan key:generate
```

Edit `.env` file with production settings:
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=smart_booking
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password

CACHE_DRIVER=redis
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis

MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-email
MAIL_PASSWORD=your-password
```

#### 4. Database Setup
```bash
php artisan migrate --force
php artisan db:seed --force
```

#### 5. Optimize Application
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```

#### 6. Set Permissions
```bash
chown -R www-data:www-data /path/to/project
chmod -R 755 /path/to/project
chmod -R 777 /path/to/project/storage
chmod -R 777 /path/to/project/bootstrap/cache
```

### Nginx Configuration

Create `/etc/nginx/sites-available/smart-booking`:
```nginx
server {
    listen 80;
    server_name yourdomain.com;
    return 301 https://$server_name$request_uri;
}

server {
    listen 443 ssl http2;
    server_name yourdomain.com;
    root /path/to/project/public;
    index index.php;

    ssl_certificate /path/to/ssl/cert.pem;
    ssl_certificate_key /path/to/ssl/private.key;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.ht {
        deny all;
    }
}
```

### Supervisor Configuration

Create `/etc/supervisor/conf.d/smart-booking-worker.conf`:
```ini
[program:smart-booking-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /path/to/project/artisan queue:work --sleep=3 --tries=3 --max-time=3600
autostart=true
autorestart=true
stopasgroup=true
killasgroup=true
user=www-data
numprocs=4
redirect_stderr=true
stdout_logfile=/var/log/supervisor/smart-booking-worker.log
stopwaitsecs=3600
```

### Cron Job

Add to crontab:
```bash
* * * * * cd /path/to/project && php artisan schedule:run >> /dev/null 2>&1
```

### Monitoring

#### Health Check
```bash
curl https://yourdomain.com/health
```

#### Log Monitoring
```bash
tail -f /path/to/project/storage/logs/laravel.log
```

### Backup Strategy

#### Database Backup
```bash
mysqldump -u username -p smart_booking > backup_$(date +%Y%m%d_%H%M%S).sql
```

#### Files Backup
```bash
tar -czf storage_backup_$(date +%Y%m%d_%H%M%S).tar.gz storage/
```

### SSL Certificate

#### Let's Encrypt
```bash
sudo apt install certbot python3-certbot-nginx
sudo certbot --nginx -d yourdomain.com
```

### Performance Optimization

#### Redis Configuration
```bash
# /etc/redis/redis.conf
maxmemory 256mb
maxmemory-policy allkeys-lru
```

#### PHP-FPM Optimization
```ini
# /etc/php/8.2/fpm/pool.d/www.conf
pm = dynamic
pm.max_children = 50
pm.start_servers = 5
pm.min_spare_servers = 5
pm.max_spare_servers = 35
```

### Security Hardening

#### Firewall Rules
```bash
sudo ufw allow 22/tcp
sudo ufw allow 80/tcp
sudo ufw allow 443/tcp
sudo ufw enable
```

#### Fail2Ban Configuration
```bash
sudo apt install fail2ban
sudo systemctl enable fail2ban
sudo systemctl start fail2ban
```

### Troubleshooting

#### Common Issues
1. **502 Bad Gateway**: Check PHP-FPM status
2. **500 Internal Error**: Check Laravel logs
3. **Database Connection**: Verify credentials and permissions
4. **Permission Denied**: Check file permissions

#### Debug Commands
```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
```

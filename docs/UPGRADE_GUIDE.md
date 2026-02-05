# Upgrade Guide

## Version Upgrade Instructions

### From v1.0.x to v1.1.0

#### Breaking Changes
- Updated Laravel from 11.x to 12.0
- PHP minimum version increased to 8.2
- Changed database migration structure

#### Upgrade Steps

1. **Backup Your Application**
```bash
# Backup database
mysqldump -u username -p smart_booking > backup_before_upgrade.sql

# Backup files
tar -czf project_backup_$(date +%Y%m%d).tar.gz /path/to/project
```

2. **Update Dependencies**
```bash
# Update composer dependencies
composer update laravel/framework "^12.0"

# Update Node.js dependencies
npm update
```

3. **Run Database Migrations**
```bash
php artisan migrate --force
```

4. **Clear Caches**
```bash
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear
```

5. **Update Configuration**
```env
# Update .env file if needed
APP_NAME="Smart Service Booking"
APP_DEBUG=false
```

### From v1.1.0 to v1.2.0

#### New Features
- Real-time chat system
- Video consultation integration
- Advanced analytics dashboard
- AI-powered recommendations

#### Upgrade Steps

1. **Install New Dependencies**
```bash
composer require pusher/pusher-php-server
composer require laravel-telescope
npm install socket.io-client
```

2. **Run New Migrations**
```bash
php artisan migrate --force
```

3. **Publish New Assets**
```bash
php artisan vendor:publish --tag=telescope-assets
npm run build
```

4. **Configure New Features**
```env
# Add to .env
PUSHER_APP_ID=your_app_id
PUSHER_APP_KEY=your_app_key
PUSHER_APP_SECRET=your_app_secret
PUSHER_APP_CLUSTER=your_cluster
```

## General Upgrade Process

### Pre-Upgrade Checklist

1. **Check Requirements**
```bash
# Check PHP version
php -v

# Check extensions
php -m | grep -E "(mbstring|xml|mysql|gd|zip)"

# Check composer version
composer --version
```

2. **Review Release Notes**
- Check [Laravel upgrade guide](https://laravel.com/docs/upgrade)
- Review this project's CHANGELOG.md
- Check for any breaking changes

3. **Test in Staging**
- Create a staging environment
- Test upgrade process
- Verify all functionality works

### Upgrade Commands

```bash
# Step 1: Update dependencies
composer update

# Step 2: Run migrations
php artisan migrate --force

# Step 3: Clear and rebuild caches
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize

# Step 4: Restart services
php artisan queue:restart
```

### Post-Upgrade Verification

1. **Test Core Functionality**
```bash
# Test application
php artisan tinker
>>> app()->version()

# Test database connection
>>> DB::connection()->getDatabaseName()

# Test cache
>>> Cache::put('test', 'value', 60);
>>> Cache::get('test');
```

2. **Run Tests**
```bash
php artisan test
```

3. **Check Logs**
```bash
tail -f storage/logs/laravel.log
```

## Troubleshooting Upgrades

### Common Issues

#### Composer Dependency Conflicts
```bash
# Resolve conflicts
composer update --prefer-stable

# Clear composer cache
composer clear-cache

# Reinstall dependencies
rm -rf vendor composer.lock
composer install
```

#### Migration Issues
```bash
# Check migration status
php artisan migrate:status

# Rollback if needed
php artisan migrate:rollback

# Force migration (use with caution)
php artisan migrate --force
```

#### Cache Issues
```bash
# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Rebuild caches
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Security Updates

### Regular Security Maintenance

1. **Update Dependencies**
```bash
# Check for security updates
composer audit

# Update packages
composer update

# Check npm packages
npm audit
npm audit fix
```

2. **Review Security Advisories**
- [Laravel Security Releases](https://laravel.com/docs/releases#security-releases)
- [PHP Security Advisories](https://www.php.net/security-advisories.php)

3. **Monitor Vulnerabilities**
```bash
# Install security checker
composer require enlightn/security-checker --dev

# Check for vulnerabilities
php artisan security-checker
```

## Backup Strategy

### Automated Backups

1. **Database Backups**
```bash
# Create backup script
#!/bin/bash
DATE=$(date +%Y%m%d_%H%M%S)
mysqldump -u username -p smart_booking > backup_$DATE.sql
find /path/to/backups -name "backup_*.sql" -mtime +7 -delete
```

2. **File Backups**
```bash
# Backup script
#!/bin/bash
DATE=$(date +%Y%m%d_%H%M%S)
tar -czf project_backup_$DATE.tar.gz /path/to/project
find /path/to/backups -name "project_backup_*.tar.gz" -mtime +7 -delete
```

3. **Cron Jobs**
```bash
# Add to crontab
0 2 * * * /path/to/backup_database.sh
0 3 * * * /path/to/backup_files.sh
```

## Rollback Plan

### Emergency Rollback

1. **Database Rollback**
```bash
# Restore database
mysql -u username -p smart_booking < backup_before_upgrade.sql
```

2. **Code Rollback**
```bash
# Reset to previous commit
git reset --hard HEAD~1

# Or checkout specific tag
git checkout v1.0.0
```

3. **Clear Caches**
```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

## Version Compatibility Matrix

| Version | PHP | Laravel | MySQL | Node.js |
|---------|-----|---------|-------|---------|
| 1.0.x   | 8.1 | 11.x    | 8.0+  | 16+     |
| 1.1.x   | 8.2 | 12.0    | 8.0+  | 18+     |
| 1.2.x   | 8.2 | 12.0    | 8.0+  | 18+     |

## Support

### Getting Help During Upgrade

1. **Documentation**
- Read this guide thoroughly
- Check Laravel upgrade documentation
- Review project-specific changelog

2. **Community Support**
- [Laravel Forums](https://laracasts.com/discuss)
- [Stack Overflow](https://stackoverflow.com/questions/tagged/laravel)
- [GitHub Issues](https://github.com/your-repo/issues)

3. **Professional Support**
- Hire Laravel developers
- Contact original development team
- Consider managed hosting services

## Best Practices

### Before Upgrading
- Always backup first
- Test in staging environment
- Read all release notes
- Plan for downtime
- Communicate with users

### During Upgrade
- Follow steps in order
- Monitor logs closely
- Test each step
- Don't skip verification
- Keep rollback plan ready

### After Upgrade
- Test thoroughly
- Monitor performance
- Update documentation
- Train users on new features
- Plan next upgrade

This upgrade guide ensures smooth transitions between versions while maintaining system stability and data integrity.

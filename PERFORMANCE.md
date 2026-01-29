# Performance Optimization Guide

## Database Optimization

### Query Optimization
```php
// Use eager loading to prevent N+1 queries
$services = Service::with('category', 'provider')->get();

// Select only needed columns
$users = User::select('id', 'name', 'email')->get();

// Use indexes properly
Schema::table('bookings', function (Blueprint $table) {
    $table->index(['user_id', 'status']);
    $table->index(['provider_id', 'created_at']);
});

// Use pagination for large datasets
$services = Service::paginate(20);
```

### Database Caching
```php
// Cache query results
$categories = Cache::remember('categories', 3600, function () {
    return Category::all();
});

// Cache expensive operations
$stats = Cache::remember('booking_stats', 1800, function () {
    return [
        'total_bookings' => Booking::count(),
        'revenue' => Payment::sum('amount'),
    ];
});
```

### Connection Pooling
```env
// .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=smart_booking
DB_USERNAME=smart_booking
DB_PASSWORD=secret
```

```ini
# MySQL my.cnf
max_connections = 200
innodb_buffer_pool_size = 1G
query_cache_size = 64M
query_cache_type = 1
```

## Application Caching

### Redis Configuration
```env
CACHE_DRIVER=redis
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis
```

```php
// Cache configurations
'cache' => [
    'default' => 'redis',
    'stores' => [
        'redis' => [
            'driver' => 'redis',
            'connection' => 'cache',
            'lock_connection' => 'default',
        ],
    ],
],
```

### Cache Strategies
```php
// Route caching
php artisan route:cache

// Configuration caching
php artisan config:cache

// View caching
php artisan view:cache

// Application optimization
php artisan optimize
```

## Frontend Optimization

### Asset Optimization
```javascript
// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            output: {
                manualChunks: {
                    vendor: ['vue', 'alpinejs'],
                    utils: ['axios', 'lodash'],
                },
            },
        },
    },
});
```

### Image Optimization
```php
// Use Intervention Image for image optimization
use Intervention\Image\Facades\Image;

public function uploadImage(Request $request)
{
    $image = $request->file('image');
    $optimizedImage = Image::make($image)
        ->resize(800, null, function ($constraint) {
            $constraint->aspectRatio();
        })
        ->encode('jpg', 80);
    
    $path = 'images/' . uniqid() . '.jpg';
    Storage::put($path, $optimizedImage);
    
    return $path;
}
```

### Lazy Loading
```html
<!-- Lazy load images -->
<img src="placeholder.jpg" data-src="actual-image.jpg" 
     loading="lazy" class="lazy-image">

<!-- Lazy load components -->
<div x-data="{ loaded: false }" 
     x-intersect.once="loaded = true">
    <template x-if="loaded">
        <heavy-component></heavy-component>
    </template>
</div>
```

## Server Optimization

### Nginx Configuration
```nginx
server {
    listen 443 ssl http2;
    server_name yourdomain.com;
    
    # Enable gzip compression
    gzip on;
    gzip_vary on;
    gzip_min_length 1024;
    gzip_types text/plain text/css text/xml text/javascript 
               application/javascript application/xml+rss 
               application/json;
    
    # Enable caching
    location ~* \.(jpg|jpeg|png|gif|ico|css|js)$ {
        expires 1y;
        add_header Cache-Control "public, immutable";
    }
    
    # PHP-FPM optimization
    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
        
        # Enable fastcgi cache
        fastcgi_cache_path /var/cache/nginx levels=1:2 keys_zone=fastcgi_cache:100m inactive=60m;
        fastcgi_cache_key "$scheme$request_method$host$request_uri";
        fastcgi_cache_use_stale error timeout invalid_header http_500;
        fastcgi_cache_valid 200 60m;
    }
}
```

### PHP-FPM Optimization
```ini
; /etc/php/8.2/fpm/pool.d/www.conf
pm = dynamic
pm.max_children = 50
pm.start_servers = 5
pm.min_spare_servers = 5
pm.max_spare_servers = 35
pm.max_requests = 500

; Memory limits
memory_limit = 256M
max_execution_time = 60
max_input_time = 60
```

## Queue Optimization

### Queue Configuration
```php
// config/queue.php
'connections' => [
    'redis' => [
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => env('REDIS_QUEUE', 'default'),
        'retry_after' => 90,
        'block_for' => null,
    ],
],
```

### Worker Optimization
```bash
# Run multiple workers
php artisan queue:work --sleep=1 --tries=3 --max-time=3600 &
php artisan queue:work --sleep=1 --tries=3 --max-time=3600 &
php artisan queue:work --sleep=1 --tries=3 --max-time=3600 &
php artisan queue:work --sleep=1 --tries=3 --max-time=3600 &

# Use Supervisor for process management
[program:laravel-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /path/to/artisan queue:work --sleep=3 --tries=3
autostart=true
autorestart=true
numprocs=4
```

## Monitoring and Profiling

### Laravel Telescope
```bash
composer require laravel/telescope
php artisan telescope:install
php artisan migrate
```

### Performance Monitoring
```php
// Use Laravel Debugbar in development
composer require barryvdh/laravel-debugbar --dev

// Custom performance monitoring
class PerformanceMiddleware
{
    public function handle($request, Closure $next)
    {
        $start = microtime(true);
        
        $response = $next($request);
        
        $duration = microtime(true) - $start;
        
        if ($duration > 1.0) {
            Log::warning('Slow request detected', [
                'url' => $request->url(),
                'duration' => $duration,
                'method' => $request->method(),
            ]);
        }
        
        return $response;
    }
}
```

## CDN Integration

### Cloudflare Setup
```php
// Use CDN for assets
ASSET_URL=https://cdn.yourdomain.com

// Configure in .env
ASSET_URL=https://cdn.yourdomain.com
```

### Static Asset Caching
```php
// Version your assets
mix.js('resources/js/app.js', 'public/js')
   .version();

// Use cache busting
<link href="{{ mix('css/app.css') }}" rel="stylesheet">
```

## Database Indexing Strategy

### Optimal Indexes
```php
// Add indexes to frequently queried columns
Schema::table('bookings', function (Blueprint $table) {
    $table->index(['user_id', 'status']);
    $table->index(['provider_id', 'created_at']);
    $table->index(['service_id', 'booking_date']);
});

// Composite indexes for complex queries
Schema::table('services', function (Blueprint $table) {
    $table->index(['category_id', 'is_active', 'created_at']);
});
```

### Query Analysis
```bash
# Enable slow query log
SET GLOBAL slow_query_log = 'ON';
SET GLOBAL long_query_time = 1;

# Analyze query performance
EXPLAIN SELECT * FROM bookings WHERE user_id = 1 AND status = 'confirmed';
```

## Memory Management

### PHP Memory Optimization
```php
// Process large datasets in chunks
User::chunk(200, function ($users) {
    foreach ($users as $user) {
        // Process user
    }
});

// Use cursor for memory efficiency
foreach (User::cursor() as $user) {
    // Process user
}

// Free memory when needed
unset($largeVariable);
gc_collect_cycles();
```

## Security Performance Balance

### Rate Limiting
```php
// Apply rate limiting to API routes
Route::middleware('throttle:60,1')->group(function () {
    Route::get('/api/services', [ServiceController::class, 'index']);
});

// Dynamic rate limiting
Route::middleware('throttle:10,1')->group(function () {
    Route::post('/api/bookings', [BookingController::class, 'store']);
});
```

### Input Validation Optimization
```php
// Use efficient validation rules
$request->validate([
    'email' => 'required|email|max:255',
    'name' => 'required|string|max:255',
    'phone' => 'nullable|string|max:20',
]);

// Cache validation rules
$rules = Cache::remember('booking_validation_rules', 3600, function () {
    return [
        'service_id' => 'required|exists:services,id',
        'booking_date' => 'required|date|after:today',
        'notes' => 'nullable|string|max:1000',
    ];
});
```

## Monitoring Tools

### Application Performance Monitoring (APM)
- New Relic
- Datadog
- Elastic APM
- Scout APM

### Server Monitoring
- Prometheus + Grafana
- Zabbix
- Nagios
- Uptime Robot

### Database Monitoring
- Percona Monitoring and Management (PMM)
- MySQL Enterprise Monitor
- pgAdmin (for PostgreSQL)

## Performance Testing

### Load Testing Tools
```bash
# Apache Bench
ab -n 1000 -c 10 https://yourdomain.com/

# Siege
siege -c 25 -t 30s https://yourdomain.com/

# JMeter (GUI tool)
# Configure test plan with multiple threads
```

### Database Benchmarking
```bash
# Benchmark database performance
sysbench --mysql-host=localhost --mysql-user=root --mysql-password=password \
         --mysql-db=smart_booking --db-driver=mysql \
         --threads=10 --time=60 oltp_read_write run
```

This comprehensive performance optimization guide will help ensure your Smart Service Booking Management System runs efficiently under load.

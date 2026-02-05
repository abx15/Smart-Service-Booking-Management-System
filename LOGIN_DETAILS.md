# Login Details

This document contains the default login credentials for the Smart Service Booking Management System.

## Default Login Credentials

### Admin Login
- **Email:** `admin@example.com`
- **Password:** `password`
- **Role:** Administrator
- **Name:** Admin User

### Service Provider (Worker) Login
- **Email:** `provider@example.com`
- **Password:** `password`
- **Role:** Service Provider
- **Name:** John Provider
- **Phone:** 1234567890

### Customer Login
- **Email:** `customer@example.com`
- **Password:** `password`
- **Role:** Customer
- **Name:** Jane Customer

## Important Notes

1. **Default Password:** All accounts use the same default password: `password`
2. **Database Seeding:** These accounts are created when you run the database seeders
3. **Security:** Change these passwords in production environment
4. **Email Verification:** All accounts are pre-verified

## How to Create These Accounts

If these login details don't work, run the following command to seed the database:

```bash
php artisan db:seed
```

Or run specific seeders:

```bash
php artisan db:seed --class=RoleSeeder
php artisan db:seed --class=UserSeeder
```

## Access URLs

- **Main Application:** `http://localhost` (or your configured APP_URL)
- **Admin Dashboard:** Login with admin credentials and navigate to dashboard
- **Provider Panel:** Login with provider credentials
- **Customer Portal:** Login with customer credentials

## User Roles

1. **Admin:** Full system access, can manage all users, bookings, services
2. **Provider:** Can manage their services, view assigned bookings, update status
3. **Customer:** Can book services, view their bookings, manage profile

---

⚠️ **Security Warning:** These are default credentials meant for development/testing only. Always change passwords before deploying to production.

# 🚀 Smart Service Booking System - Quick Start

## 📋 Easy Ways to Start the Application

### Method 1: Double Click (Easiest) ⭐
1. **Double click on `start.bat`** file
2. Wait for installation to complete
3. Application will open automatically in browser

### Method 2: PowerShell Script
1. Right-click on `start.ps1`
2. Select "Run with PowerShell"
3. Follow the prompts

### Method 3: NPM Commands
```bash
# Install dependencies first time only
npm install

# Start everything together
npm run start

# OR for full development mode
npm run full
```

### Method 4: Manual Start
```bash
# Terminal 1 - Start Laravel Server
php artisan serve --host=0.0.0.0 --port=8000

# Terminal 2 - Start NPM Dev Server
npm run dev
```

## 🌐 Access URLs

Once started, open your browser and go to:
- **Main Application:** http://localhost:8000
- **Admin Panel:** http://localhost:8000/admin/dashboard
- **Worker Panel:** http://localhost:8000/worker/dashboard

## 📱 Features Available

- ✅ **Home Page** with all sections
- ✅ **Services** with categories
- ✅ **About, Contact, FAQ** pages
- ✅ **Admin Panel** for management
- ✅ **Worker Panel** for providers
- ✅ **W-Full Responsive Design**

## 🛠️ Troubleshooting

### If ports are busy:
```bash
# Use different ports
php artisan serve --host=0.0.0.0 --port=8001
```

### If npm install fails:
```bash
# Clear cache and reinstall
npm cache clean --force
npm install
```

### If Laravel doesn't start:
```bash
# Clear Laravel cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

## 🎯 Quick Test Checklist

After starting, verify:
- [ ] Home page loads properly
- [ ] Navigation works
- [ ] All pages are w-full (full width)
- [ ] Mobile responsive works
- [ ] Admin panel accessible
- [ ] Worker panel accessible

---

**🎉 Your Smart Service Booking System is ready to use!**

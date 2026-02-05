Write-Host "Starting Smart Service Booking System..." -ForegroundColor Green
Write-Host ""

Write-Host "Step 1: Installing dependencies..." -ForegroundColor Yellow
npm install

Write-Host ""
Write-Host "Step 2: Starting Laravel Server..." -ForegroundColor Yellow
Start-Process powershell -ArgumentList "-NoExit", "-Command", "php artisan serve --host=0.0.0.0 --port=8000"

Write-Host ""
Write-Host "Step 3: Starting NPM Dev Server..." -ForegroundColor Yellow
Start-Process powershell -ArgumentList "-NoExit", "-Command", "npm run dev"

Write-Host ""
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "Smart Service Booking System Started!" -ForegroundColor Green
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""
Write-Host "Laravel Server: http://localhost:8000" -ForegroundColor White
Write-Host ""

Write-Host "Waiting 5 seconds before opening browser..." -ForegroundColor Yellow
Start-Sleep -Seconds 5

Start-Process "http://localhost:8000"

Write-Host ""
Write-Host "Application is now running!" -ForegroundColor Green
Write-Host "Keep this window open to keep servers running." -ForegroundColor Cyan
Write-Host "Press Ctrl+C in server windows to stop." -ForegroundColor Yellow
Read-Host "Press Enter to exit this script"

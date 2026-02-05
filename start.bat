@echo off
echo Starting Smart Service Booking System...
echo.

echo Step 1: Installing dependencies...
call npm install

echo.
echo Step 2: Starting Laravel Server...
start "Laravel Server" cmd /k "php artisan serve --host=0.0.0.0 --port=8000"

echo.
echo Step 3: Starting NPM Dev Server...
start "NPM Dev" cmd /k "npm run dev"

echo.
echo ========================================
echo Smart Service Booking System Started!
echo ========================================
echo.
echo Laravel Server: http://localhost:8000
echo.
echo Press any key to open the application in browser...
pause > nul

start http://localhost:8000

echo.
echo Application is now running!
echo Keep this window open to keep servers running.
echo Press Ctrl+C in server windows to stop.
pause

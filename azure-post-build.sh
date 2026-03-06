#!/bin/bash

# 1. Move to the directory where package.json lives (the root)
cd /home/site/wwwroot

# 2. Install JS dependencies and build assets
echo "Running NPM Build..."
npm install
npm run build

# 3. Optimization for Production
echo "Caching Laravel config..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 4. Set Permissions 
# (Azure App Service runs as 'www-data' or similar; 
# ensuring storage is writable prevents 500 errors)
chmod -R 775 storage bootstrap/cache
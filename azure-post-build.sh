# #!/bin/bash

# # 1. Move to the directory where package.json lives (the root)
# cd /home/site/wwwroot

# # 2. Install JS dependencies and build assets
# echo "Running NPM Build..."
# npm install
# npm run build

# # 3. Optimization for Production
# echo "Caching Laravel config..."
# php artisan config:cache
# php artisan route:cache
# php artisan view:cache

# # 4. Set Permissions 
# # (Azure App Service runs as 'www-data' or similar; 
# # ensuring storage is writable prevents 500 errors)
# chmod -R 775 storage bootstrap/cache

#!/bin/bash

# Navigate to the deployment source (where your code actually sits during build)
# If DEPLOYMENT_TARGET isn't set, fallback to the standard site root
TARGET_DIR="${DEPLOYMENT_TARGET:-/home/site/wwwroot}"
cd "$TARGET_DIR"

echo "Current directory: $(pwd)"
echo "Checking for package.json..."

if [ -f "package.json" ]; then
    echo "package.json found. Starting build..."
    
    # Force npm to use the local directory and ignore global config conflicts
    npm install --prefix "$TARGET_DIR"
    npm run build --prefix "$TARGET_DIR"
    
    echo "Vite build successful."
else
    echo "ERROR: package.json not found in $(pwd)"
    exit 1
fi

# Optional: Laravel optimizations
php artisan config:cache
php artisan route:cache
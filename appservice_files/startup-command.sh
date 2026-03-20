# Overrite  default NGINX config file
cp /home/site/wwwroot/appservice_files/default-nginx /etc/nginx/sites-enabled/default

# restart nginx
service nginx restart

#Fix permissions for Laravel
chmod -R 775 /home/site/wwwroot/storage /home/site/wwwroot/bootstrap/cache

php /home/site/wwwroot/artisan migrate --force

# Clear caches
php /home/site/wwwroot/artisan cache:clear

# Clear and cache routes
php /home/site/wwwroot/artisan route:cache

# Clear and cache config
php /home/site/wwwroot/artisan config:cache

# Clear and cache views
php /home/site/wwwroot/artisan view:cache
#!/bin/sh

echo "[INFO] Running Laravel startup entrypoint..."

# Remove hot reload file & old view cache if exists
rm -f /var/www/html/public/hot
rm -rf /var/www/html/storage/framework/views/*.php

# Ensure storage & cache directories exist
mkdir -p /var/www/html/storage/framework/views \
         /var/www/html/storage/framework/sessions \
         /var/www/html/storage/framework/cache/data \
         /var/www/html/storage/logs \
         /var/www/html/bootstrap/cache

chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public 2>/dev/null || true
chmod -R 755 /var/www/html/public 2>/dev/null || true

# Run database migrations & seeders safely
php /var/www/html/artisan migrate --force 2>&1 || echo "[WARNING] Migration failed or database not ready yet."
php /var/www/html/artisan db:seed --force 2>&1 || echo "[WARNING] Database seed failed or skipped."

# Create storage link
php /var/www/html/artisan storage:link --force 2>/dev/null || true

# Optimize Laravel Production Caching for ultra-fast (<0.1s) response time
php /var/www/html/artisan config:cache 2>&1 || true
php /var/www/html/artisan route:cache 2>&1 || true
php /var/www/html/artisan view:cache 2>&1 || true
php /var/www/html/artisan event:cache 2>&1 || true

echo "[INFO] Laravel startup entrypoint completed."

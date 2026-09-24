# Production PHP + Nginx Environment
FROM serversideup/php:8.3-fpm-nginx

# Environment settings
ENV WEB_ROOT=/var/www/html/public
ENV COMPOSER_ALLOW_SUPERUSER=1
ENV PORT=8080

# PHP OPcache High Performance Tuning for <0.1s render
ENV PHP_OPCACHE_ENABLE=1
ENV PHP_OPCACHE_MEMORY_CONSUMPTION=128
ENV PHP_OPCACHE_MAX_ACCELERATED_FILES=10000
ENV PHP_OPCACHE_VALIDATE_TIMESTAMPS=0

WORKDIR /var/www/html

# Switch to root to install required PHP extensions, Node.js, and setup system entrypoint script
USER root
RUN install-php-extensions bcmath gd pdo_mysql opcache
RUN apt-get update && apt-get install -y nodejs npm && rm -rf /var/lib/apt/lists/*

# Copy startup entrypoint script to system directory as root
COPY entrypoint.sh /etc/entrypoint.d/99-laravel.sh
RUN sed -i 's/\r$//' /etc/entrypoint.d/99-laravel.sh && chmod +x /etc/entrypoint.d/99-laravel.sh

# Switch to www-data for application files and composer
USER www-data

# Copy source code with correct permissions
COPY --chown=www-data:www-data . .

# Install Node dependencies and build production assets with Vite
RUN npm ci && npm run build

# Install PHP dependencies for production
RUN composer install --no-dev --optimize-autoloader

# Ensure required storage and cache directories exist with correct permissions
RUN mkdir -p storage/framework/views \
             storage/framework/sessions \
             storage/framework/cache/data \
             storage/logs \
             bootstrap/cache \
             database && \
    touch database/database.sqlite && \
    rm -rf public/hot && \
    chmod -R 755 public && \
    chown -R www-data:www-data storage bootstrap/cache database public 2>/dev/null || true

# Set port variables for Nginx
ENV HTTP_PORT=8080
EXPOSE 8080




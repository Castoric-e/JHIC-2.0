# Production PHP + Nginx Environment
FROM serversideup/php:8.3-fpm-nginx

# Environment settings
ENV WEB_ROOT=/var/www/html/public
ENV COMPOSER_ALLOW_SUPERUSER=1
ENV PORT=8080

WORKDIR /var/www/html

# Switch to root to install required PHP extensions and setup system entrypoint script
USER root
RUN install-php-extensions bcmath gd pdo_mysql

# Copy startup entrypoint script to system directory as root
COPY entrypoint.sh /etc/entrypoint.d/99-laravel.sh
RUN sed -i 's/\r$//' /etc/entrypoint.d/99-laravel.sh && chmod +x /etc/entrypoint.d/99-laravel.sh

# Switch to www-data for application files and composer
USER www-data

# Copy source code with correct permissions (including compiled public/build assets)
COPY --chown=www-data:www-data . .

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




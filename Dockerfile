# Use official PHP image with Apache
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    sqlite3 \
    libsqlite3-dev \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_sqlite pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Node.js (for Vite)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && apt-get install -y nodejs

# Enable Apache rewrite module
RUN a2enmod rewrite

# Configure Apache to use Laravel public directory
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Copy project files
COPY . .

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

# Install PHP dependencies
RUN composer install --no-dev --no-interaction --no-progress --optimize-autoloader

# Install Node dependencies and build assets
RUN npm ci || npm install
RUN npm run build

# Run migrations to create database and tables
RUN php artisan migrate --force --no-interaction

# Create storage directories and ensure writable permissions
RUN mkdir -p storage/logs storage/framework/cache storage/framework/sessions storage/framework/views
RUN chmod -R 775 storage bootstrap/cache
RUN touch storage/database.sqlite
RUN chmod 666 storage/database.sqlite

# Expose port
EXPOSE 80

# Health check
HEALTHCHECK --interval=10s --timeout=3s --start-period=40s --retries=3 \
    CMD curl -f http://localhost/up || exit 1

# Start Apache
CMD ["apache2-foreground"]

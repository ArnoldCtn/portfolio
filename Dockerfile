# ============================================================
# Stage 1 — Build frontend assets with Node + Vite
# ============================================================
FROM node:20-alpine AS assets

WORKDIR /app

# Install JS dependencies
COPY package.json package-lock.json* ./
RUN npm install --no-audit --no-fund

# Build Vite assets
COPY vite.config.js ./
COPY tailwind.config.js* postcss.config.js* ./
COPY resources/ ./resources/
COPY public/ ./public/
RUN npm run build


# ============================================================
# Stage 2 — Composer dependencies (no dev)
# ============================================================
FROM composer:2 AS vendor

WORKDIR /app
COPY composer.json composer.lock* ./
RUN composer install \
        --no-dev \
        --no-interaction \
        --no-progress \
        --no-scripts \
        --optimize-autoloader


# ============================================================
# Stage 3 — PHP runtime (production image)
# ============================================================
FROM php:8.2-cli-alpine AS runtime

# System deps required by common PHP extensions
RUN apk add --no-cache \
        bash \
        curl \
        git \
        icu-dev \
        libzip-dev \
        oniguruma-dev \
        sqlite-dev \
        $PHPIZE_DEPS \
    && docker-php-ext-install \
        bcmath \
        intl \
        mbstring \
        opcache \
        pdo \
        pdo_mysql \
        pdo_pgsql \
        pdo_sqlite \
        zip

# Composer (copy from official image)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy app code
COPY . .

# Copy built assets from stage 1
COPY --from=assets /app/public/build ./public/build

# Copy vendor from stage 2
COPY --from=vendor /app/vendor ./vendor

# Render storage dirs (writable on ephemeral disk)
RUN mkdir -p \
        storage/framework/cache/data \
        storage/framework/sessions \
        storage/framework/views \
        storage/logs \
        bootstrap/cache \
        /tmp/views \
    && chown -R www-data:www-data \
        storage \
        bootstrap/cache \
        /tmp/views \
    && chmod -R ug+rwx storage bootstrap/cache /tmp/views

# Production Laravel optimizations
RUN php artisan package:discover --ansi || true \
    && php artisan config:cache || true \
    && php artisan route:cache || true \
    && php artisan view:cache || true

# Render's default web port
ENV PORT=10000
EXPOSE 10000

# Boot script: runs migrations then starts PHP's built-in server on $PORT
CMD ["sh", "-c", "php artisan migrate --force --no-interaction || true; php -S 0.0.0.0:${PORT:-10000} -t public public/index.php"]

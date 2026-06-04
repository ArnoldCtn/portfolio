#!/usr/bin/env bash
# Build script for Render's native PHP environment

set -euo pipefail

echo "==> Installing PHP dependencies"
composer install --no-dev --no-interaction --no-progress --optimize-autoloader

echo "==> Installing Node dependencies"
npm ci || npm install

echo "==> Building Vite assets"
npm run build

echo "==> Running database migrations"
php artisan migrate --force --no-interaction

echo "==> Caching configuration"
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "==> Build complete"

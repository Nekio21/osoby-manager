#!/bin/sh
set -e

until nc -z db 3306; do
  echo "Baza jeszcze nie gotowa, czekam 2s..."
  sleep 2
done

php artisan config:clear
php artisan view:clear
php artisan route:clear

php artisan migrate --seed --force

php artisan config:cache
php artisan route:cache
php artisan view:cache


php artisan serve --host=0.0.0.0 --port=8000

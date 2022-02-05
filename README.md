# laravel-practice

## initialize
cd path/to/laravel-practice
docker-compose build
docker-compose up -d

docker-compose exec app bash

cd /var/www/html/laravel-practice
composer install
touch .env
chmod 777 -R storage/
php artisan key:generate
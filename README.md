# laravel-practice

## initialize
cd path/to/laravel-practice
docker-compose build
docker-compose up -d

docker-compose exec app bash

cd /var/www/html/laravel-practice
composer install
move .env.example .env
  ※dbの接続設定を修正
chmod 777 -R storage/
php artisan key:generate
php artisan migrate
npm install
npm run dev
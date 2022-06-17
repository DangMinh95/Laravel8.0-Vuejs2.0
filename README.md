cp .env.example .env

run npm install && composer install

php artisan key:generate

npm run watch || npm run dev && php artisan serve

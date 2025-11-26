@echo off
echo Running setup...

call composer install
call copy .env.example .env
call php artisan key:generate
call npm install
call npm run build

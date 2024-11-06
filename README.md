## Prerequisites

Node.js (version >= 18.20.0)
PHP (version >= 8.2.12)
MySQL database

## Installation

git clone https://github.com/JomelIsidro/laravel11-todo.git

composer install

cp .env.example .env
create database name "laravel_todo"

php artisan key:generate

php artisan migrate

php artisan serve


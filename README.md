# Larave CRUD Boilerplate

## Sample
![image](https://user-images.githubusercontent.com/42564050/182523954-2b46fb8a-f87a-4fc1-a11b-3a7247ba6c82.png)

## Requirements
**php >= 8.0**

## Installation
```
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
```

## Config Env
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3360
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

## Migrate DB
```
php artisan migrate --seed
```

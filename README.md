## Installation

###

```bash
git clone https://github.com/firdavsibodullaev/laravel-lesson-project.git
```

```bash
composer install
```

`.env.example` faylni nomi `.env` ga o'zgartiriladi

```bash
php artisan key:generate
```

## Database config

`.env` faylni ichida:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bazani nomini kiritasiz
DB_USERNAME=root
DB_PASSWORD=
```
Yaratilgan migratsiyalarni bazaga yuklash

```bash
php artisan migrate
```

## Server

```bash
php artisan serve
```


# TAYYOR !

```
composer install
```

```
php artisan key:generate
```

```bash
cp .env.example .env
```

Configure `.env` (name, url, database)

```
php artisan migrate:fresh --seed
```

Create a symbolic link for public storage:
```bash
php artisan storage:link
```

Run web server:
```
php artisan serve
```

Go to `localhost:8000/tests` or other url, shown in console.

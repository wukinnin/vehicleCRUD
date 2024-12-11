---
## You will need

- Laravel
- Xampp
- Composer
- Git

---

1. install composer on vendor
```
composer install
```

2. copy to new .env file
```
cp .env.example .env
```

3. modify .env file

Change DB_DATABASE if needed.
If new, create new database with matching name in `127.0.0.1/phpmyadmin`
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=vehicleCRUD
DB_USERNAME=root
DB_PASSWORD=
```

4. generate key

```
php artisan key:generate
```

5. migrate tables
```
php artisan migrate
```
---

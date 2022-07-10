# Clothing Store Management Website - CRUD

This is a Laravel E-commerce Project with store's name is Sebastian.

## Installation
```bash
composer install
```

An application key can be generated with the command:
```bash
php artisan key:generate
```

Create a database with the same name as the database defined in the .env file:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=clothing
DB_USERNAME=root
DB_PASSWORD=
```

You can import file 'clothing_website.sql' in folder DB to use available data, or

You can create new data with migrate the database:
```bash
php artisan migrate
```

Run the artisan serve command:
```bash
php artisan serve
```

Proceed to:
```bash
http://127.0.0.1:8000
```

Login as customer: user@gmail.com - pass: 12345678
Login as admin: admin@gmail.com - pass: 12345678

## License
This project is open-source and licensed under the [MIT](https://choosealicense.com/licenses/mit/)
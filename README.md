# Clothing Store Management Website - CRUD
# **Introduction**

This is a Laravel E-commerce Project with store's name is Sebastian.

> Technology Used : Laravel-8, Bootstrap, JavaScript, Ajax

# **Page**

###### _(User - Logged and not logged)_

-   Home.
![Dark mode](https://drive.google.com/file/d/15TUuD3wr_p8aYcXxrzgZksQR-sjgVsDj/view?usp=share_link)
-   Dashboard.
![Dark mode](https://drive.google.com/file/d/1DMWwDAwJTepdg93P37Hv-PPU5dJCSXNa/view?usp=share_link)
-   Detail product.
![Dark mode](https://drive.google.com/file/d/1LHbNQTfrugEcmUetUUJbGMdSX4TzDjIU/view?usp=share_link)
-   Reviews.
![Dark mode](https://drive.google.com/file/d/1n8aHXJSlkumb6mZ22yxnxIowFXp-31qO/view?usp=share_link)
-   Cart.
![Dark mode](https://drive.google.com/file/d/1ueSTtENDhDmpbvTwn1-sjnXMgbs7EhWx/view?usp=share_link)
-   Order history.
![Dark mode](https://drive.google.com/file/d/1IneAYDCrvIFmPoHCMT9Mwv89HV9O3BWv/view?usp=share_link)
-   Payment.
![Dark mode](https://drive.google.com/file/d/1fH4eId5gQLJdXWYROyzZ08RcvNhpQJoT/view?usp=share_link)

###### _(Admin Panel - Only with admin's accounts)_

-   Dashboard.
![Dark mode](https://drive.google.com/file/d/1TYEuQ3gyau3RZh9oV8DHi-TNd_qqmvA5/view?usp=share_link)
-   Users.
![Dark mode](https://drive.google.com/file/d/1hWXOYEuxIbYZZh7foBi6YG4BqwdNdGjK/view?usp=share_link)
-   Products.
![Dark mode](https://drive.google.com/file/d/1qs0DWqLhCafMz0mQntqzTHZzPfrFQQfc/view?usp=share_link)
-   Messages.
![Dark mode](https://drive.google.com/file/d/10e9IkZykQ4JU0Xjat9DA-4FIam9R57Kh/view?usp=share_link)
-   Orders.
![Dark mode](https://drive.google.com/file/d/10a1lrXMky4YEYUiYPIOpurJUVt1KWhoG/view?usp=share_link)
-   Reviews.
![Dark mode](https://drive.google.com/file/d/10a1lrXMky4YEYUiYPIOpurJUVt1KWhoG/view?usp=share_link)
-   Create new product.
![Dark mode](https://drive.google.com/file/d/1Gf6L66JFvRCtVzdTtigahiUyy28DESZX/view?usp=share_link)

# **Features**

-   Responsive.
-   Authentication.
-   Sign in, log out.
-   Follow items, unfollow items (Wishlist).
-   Distinguish admin and normal user.
-   Product:
    -   Search, filter.
    -   Review, rating product.
    -   Multiple image.
    -   Sizes, color.
    -   Gender.
-   Payment:
    -   Coupon, discount.
    -   Form of payment.
    -   Return order.
    -   Order history.
-   Admin-page:
    -   Statistics of registered people and number of products, orders.
    -   Table showing users, products,  messages and reviews.
    -   Order confirmation and management.
    -   Create a new items.
-   ...

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

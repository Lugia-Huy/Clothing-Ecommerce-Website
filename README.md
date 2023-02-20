# Clothing Store Management Website - CRUD
# **Introduction**

This is a Laravel E-commerce Project with store's name is Sebastian.

> Technology Used : Laravel-8, Bootstrap, JavaScript, Ajax

# **Page**

###### _(User - Logged and not logged)_

-   Home.
![Dark mode](https://lh3.googleusercontent.com/u/0/drive-viewer/AAOQEOQUCRt_XDPcxU5MM4qJFfI7DCFnE71AD4mEha-eGxfyDnSK5m0DVFMq-S2hG0I_ZGqRBKCzBHk6cRLes0u_OCQm3mU-=w2306-h1776)
-   Dashboard.
![Dark mode](https://lh3.googleusercontent.com/u/0/drive-viewer/AAOQEOTZCR2qQWKRocgnd_xdgovDeiVyEyrDcE5s3ltnMUIahuyk3iWbIAFY3Y0-8Z6C2D6BLLwAoXX78qWXPVaFymJHlF_FTQ=w2306-h1776)
-   Detail product.
![Dark mode](https://lh3.googleusercontent.com/u/0/drive-viewer/AAOQEOR10m_UZxF2hNAG3npiAJiOSdEexBJ3OKh3h76FfGnVbNZ2TAu2pguuXanoEOWoGLqm_3q46f-XmjCrj4SAEO2j_Dn0Vw=w1920-h975)
-   Reviews.
![Dark mode](https://lh3.googleusercontent.com/u/0/drive-viewer/AAOQEORAMQYU5pMGKhbNruqsRgKGb9QNSWvxLseYQTGqYv8gzOkgf22ZMjdl-VTIObVI-_olzYtHSEOsYNOTmkXqCLQyLunQNA=w1920-h975)
-   Cart.
![Dark mode](https://lh3.googleusercontent.com/u/0/drive-viewer/AAOQEOThYIA6P6_OexRSCxBjHNUIOEtJHmoROp9asH7BXwaRyd1C20NQ5acJ9JZMlmyDF4Dzg5EcEn7veV72p84iHpWliw9T=w2306-h1776)
-   Order history.
![Dark mode](https://lh3.googleusercontent.com/u/0/drive-viewer/AAOQEORQ77QTlZPwhHGh72vozjpg-Rdk61GKg6ruhcNZ9CIdS95eFDH-rzwzMbLjz3_o8VGQLLYogUhC84v6ANrK0_BKUTmEeA=w2306-h1776)
-   Payment.
![Dark mode](https://lh3.googleusercontent.com/u/0/drive-viewer/AAOQEOTqDUgUcVcHIASuNKPmMsr4hZ9lUdC863qDUj9usmvwKcrvzPl51UitXRyQyofz03IgtkuwUiPkoyvpe4RdittXvvtGIA=w2306-h1776)

###### _(Admin Panel - Only with admin's accounts)_

-   Dashboard.
![Dark mode](https://lh3.googleusercontent.com/u/0/drive-viewer/AAOQEOR5bFxFoDQkpCSHJLvGZLERhevgvcNP6wjuk7MqCHdMuWYuaYnTPleTIfkSQ3KltEuTnyUoROp2QvKJYJFJU7b7zdMH=w2306-h1776)
-   Users.
![Dark mode](https://lh3.googleusercontent.com/u/0/drive-viewer/AAOQEOTKtq5DsGsHUTcQG-S3PORsKUkY7rN2mB7nIosKhXawelsnlpzBF95Mx0jm2jiJc6ZGO2ipVA5_zs-YWWus98bmQjxOYg=w2306-h1776)
-   Products.
![Dark mode](https://lh3.googleusercontent.com/u/0/drive-viewer/AAOQEOQIA2QkJQeWlvmaEx--Gk1nR2uEs9mbAt6B-sRjwYly1qy3x3o4uknnLjApeFladdKmGHYvpAGi-wwcMPdNEtDUQFJ0BQ=w2306-h1776)
-   Messages.
![Dark mode](https://lh3.googleusercontent.com/u/0/drive-viewer/AAOQEOQu2L5kTVGCNIp0f0qzfR_ZHRThTt0NDWV3_EOxEfks9zZCNukoGCYijmZ3nN3gl1WijaMNhpniILOs-Nq3UNMc5REqeQ=w2306-h1776)
-   Orders.
![Dark mode](https://lh3.googleusercontent.com/u/0/drive-viewer/AAOQEOQ0BwTc3Xlqtn3H0ta7UxxNNzszCENc5mJe5ks76UHAhNmTDTCnpaebNHG30JYtxIN-MAjGs90XxJQurKuM3SyRzUL7Fg=w2306-h1776)
-   Reviews.
![Dark mode](https://lh3.googleusercontent.com/u/0/drive-viewer/AAOQEOQ0BwTc3Xlqtn3H0ta7UxxNNzszCENc5mJe5ks76UHAhNmTDTCnpaebNHG30JYtxIN-MAjGs90XxJQurKuM3SyRzUL7Fg=w2306-h1776)
-   Create new product.
![Dark mode](https://lh3.googleusercontent.com/u/0/drive-viewer/AAOQEORFV5MjuWRr5eayHUGxivrvXNYxHA3FvXMOHRmEMHZRjqKvvKGoGjzFb7HbyYp_Ak-Ljr4VJwRQQcpeAONEbbBWD7vRMA=w2306-h1776)

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

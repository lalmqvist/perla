# Perla
your own charity shop

This project contains a e-commerce ad site built with the framework Laravel 5.6.

### Clone project
* Clone repo: `https://github.com/lalmqvist/perla.git`
* `cd perla`

### Server Requirements
+ PHP >= 7.1.3
+ OpenSSL PHP Extension
+ PDO PHP Extension
+ Mbstring PHP Extension
+ Tokenizer PHP Extension
+ XML PHP Extension
+ Ctype PHP Extension
+ JSON PHP Extension

#### Dependencies
+ [Apache](https://www.apache.org/)
+ [MySQL](https://www.mysql.com)
+ [Composer](https://getcomposer.org/download)
+ [Laravel](https://laravel.com/docs/5.6)
+ [Eloquent ORM](https://laravel.com/docs/5.6/eloquent)
+ [jQuery ^3.3.1](http://jquery.com/download/)

Check dependencies in terminal with the following commands:
```
php -v
apachectl -v
mysql -V
composer -v

```
If any of them doesn't return a version number you need to install those before continuing.

***

### Installation
1. Run `cd perla`
2. Install dependencies `composer install`
3. Run project `php artisan serve`
4. You'll find the development server running at http://127.0.0.1:8000/
5. Run `php artisan migrate:install`
6. To migrate database tables, run `php artisan migrate`
7. If you want to rollback migrations, run `php artisan migrate:fresh`

### Testuser
e-mail: test@testmail.com
psw: password


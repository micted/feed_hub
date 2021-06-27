install composer
install laravel via composer
please use php v8.00 and laravel 8.x

---Importing my database---

Since I used datasets you need my sql file. You will found the feedhub.sql file in the repo.

1. First create database called feedhub in phpmyadmin.
2. Click the Import section and import the sql file using phpmyadmin.


----In cmd ----

1.composer install

2.remove all contents of the bootstrap / cache folder

3.composer dump

4.php artisan key:generate

5.php artisan migrate

6.php artisan serve


For more guidance use official laravel documentation from laravel.com





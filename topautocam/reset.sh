#!/bin/sh
mysql -uroot -e "drop database topautocam"
mysql -uroot -e "create database topautocam"
php artisan migrate
php artisan db:seed
#php artisan nova:user

#!/bin/sh
mysql -uroot -proot -e "drop database topautocam"
mysql -uroot -proot -e "create database topautocam"
php artisan migrate
php artisan db:seed
php artisan nova:user

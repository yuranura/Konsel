<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Setelah melakukan clone
- ubah nama .env.example menjadi .env yang pada repository (kalau semisal .env gaada dilakan extract terlebih dahulu)
- install composer pada terminal (composer install)
- install npm pada terminal (npm install), note: bagi yang belum ada npm, install node.js di windows
- update composer (composer update)
- Buat database baru pada php myadmin dengan nama bekonsel
- ketik pada terminal php artisan migrate:fresh --seed
- run, npm run dev pada terminal 
- run, php artisan serve
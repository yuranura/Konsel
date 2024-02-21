<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## After Cloning
- Change .env.example into .env in the repository (if .env doesn't exist, extract it first)
- Install composer in terminal (composer install)
- Install npm in terminal (npm install), note: for those who don't have NPM, install node.js on Windows
- Update composer (composer update)
- Create a new database in php myadmin with name "bekonsel"
- Type in terminal (php artisan migrate:fresh --seed); 
- then (php artisan db:seed --class=TipeSoalSeeder);
- then (php artisan db:seed --class=TestSeeder);
- then (php artisan db:seed --class=PertanyaanSeeder);
- Run in terminal (npm run dev) 
- Run the code (php artisan serve) 

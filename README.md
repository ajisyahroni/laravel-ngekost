## ikuti tahapan ini
copas isi dari app\DssAdmin
sesuaikan isi dari database\ bla_bla_bla_create_dss_admins_table
copas isi dari app\http\controllers\auth\registerController
untuk login controllermu sesuaikan dengan App\controller\HomeController 
sesuikan halaman routingmu dengan routes\web.php dan routes\api.php

https://www.5balloons.info/changing-authentication-table-laravel/


jika masih error lakukan ini
1. composer require laravel/ui
2. php artisan ui vue --auth
3. php artisan migrate

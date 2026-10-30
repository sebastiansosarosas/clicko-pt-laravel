<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## PT Clicko

Creación de proyecto Laravel con API de usuarios con autenticación.

## Requisitos

Para poder ejecutar este proyecto es necesario [PHP](https://www.php.net/)  y [Composer](https://getcomposer.org/) .

### Instalar PHP en:

macOS:
```bash
/bin/bash -c "$(curl -fsSL https://php.new/install/mac/8.4)"
```

Windows PowerShell (ejecutar como administrador):
```bash
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
```
Linux:
```bash
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"
```

## Instalación y uso de proyecto

### Instalar dependencias (usando composer):

```bash
composer install
```

### Ejecutar seeder :

```bash
php artisan db:seed

php artisan migrate
```

### Ejecutar servidor local :

```bash
php artisan serve
```

## Rutas

### Controladores de API de usuarios y autenticación
```
app/Http/Controllers/Api/AuthController.php
app/Http/Controllers/Api/UserController.php
```

### Modelo Usuario
```
app/Models/User.php
```

### Seeder de datos de rellenado de base de datos
```
database/seeders/DatabaseSeeder.php
```

### Enrutador de rutas API
```
routes/api.php
```

Nota: Para comprobar el funcionamiento del proyecto, copiar los contenidos de .env.example a .env (o simplemente renombrarlo a ".env") es suficiente.


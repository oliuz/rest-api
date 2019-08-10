# laravel-config
Es una configuración personalizada de Laravel. Incluye paquetes importantes para iniciar su proyecto con Laravel y todos los idomas disponibles.

## ¿Qué incluye?
En el archivo composer.json encontrará la siguiente configuración:

Producción
```json
"require": {
    "php": "^7.1.3",
    "barryvdh/laravel-dompdf": "^0.8.4",
    "fideloper/proxy": "^4.0",
    "intervention/image": "^2.5",
    "laravel/framework": "5.8.*",
    "laravel/tinker": "^1.0",
    "maatwebsite/excel": "^3.1"
}
```

Desarrollo
```json
"require-dev": {
    "barryvdh/laravel-debugbar": "^3.2",
    "beyondcode/laravel-dump-server": "^1.0",
    "filp/whoops": "^2.0",
    "fzaninotto/faker": "^1.4",
    "mockery/mockery": "^1.0",
    "nunomaduro/collision": "^3.0",
    "phpunit/phpunit": "^7.5"
},
```

En el archivo resources encontrará todos los archivos de idiomas soportadas por Laravel. Es libre de eliminar los archivos que no es dispensable para su aplicación. Los idiomas estan extraidos de [caouecs/Laravel-lang](https://github.com/caouecs/Laravel-lang)

```
/resources
    /lang
```

## ¿Cómo usarlo?

Clonar el repositorio

```
git clone https://github.com/dmpb/laravel-config.git
```

Instalar composer

```
composer install
```
Crear el archivo .env y copiar los parametros del archivo .env.example

Y crear tu APP_KEY

```
php artisan key:generate

php artisan serve
```

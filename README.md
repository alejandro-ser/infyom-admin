# InfyOm Admin - Test proyect

Proyecto con fines de prueba creado siguiendo la [documentación de InfyOm](https://labs.infyom.com/laravelgenerator/docs/7.0/installation)

## Caracteristicas probadas

- [Generar Layout](https://labs.infyom.com/laravelgenerator/docs/7.0/publish-layout)
- [Generar Scaffold](https://labs.infyom.com/laravelgenerator/docs/7.0/getting-started#generator-commands)
- [Generar Datatables](https://labs.infyom.com/laravelgenerator/docs/7.0/generator-options#datatables-cli)
- [Generar factory](https://labs.infyom.com/laravelgenerator/docs/7.0/generator-options#generate-factory)
- [Generar seeder](https://labs.infyom.com/laravelgenerator/docs/7.0/generator-options#generate-seeder)
- [Generar a partir de una tabla creada](https://labs.infyom.com/laravelgenerator/docs/7.0/generator-options#custom-table-name)

## Instalar y usar

- __Requisitos:__  
    PHP >= 7.2.5  
    [Composer](https://getcomposer.org)  
    [NodeJS](https://nodejs.org)

- Clonar repositorio e ingresar al directorio principal  
`git clone https://github.com/alejandro-ser/infyom-admin.git`  
`cd infyom-admin`
- Crear una base de datos en MySQL
- Copiar ó renombrar el archivo __*.env.example*__ a __*.env*__  
`cp .env.example .env`  
- Agregar la conexión a la base de de datos en **_.env_**  
_DB_CONNECTION=mysql_  
_DB_HOST=127.0.0.1_  
_DB_PORT=3306_  
_DB_DATABASE=_**_Tu_base_de_datos_va_aquí_**  
_DB_USERNAME=_**_Tus_credenciales_van_aquí_**  
_DB_PASSWORD=_**_Tus_credenciales_van_aquí_**
- Ejecutar los comandos:  
`composer install` (instalar dependencias de Laravel)  
`php artisan migrate` (crear tablas en la base de datos)  
`php artisan db:seed` (generar registros base del administrador)  
`npm install && npm run dev` (compilar los scripts JS y estilos CSS)  
`php artisan serve` (iniciar proyecto en servidor local)
- Ingresar a la url **_http://127.0.0.1:8000_**
- Ingresar a la url **_http://127.0.0.1:8000/home_** para ver el administrador

### Login

Crear un nuevo usuario o usar uno de los creados al generar por las semillas (buscar en la tabla users).  
_Contraseña por defecto:_ **12345678**

## Imaganes demo

**Users**  
![Users](/public/img/admin_users.png)
**Products**  
![Products](/public/img/admin_products.png)
**Excel**  
![Products](/public/img/excel.png)

## Librerías usadas

`"infyomlabs/laravel-generator": "7.0.x-dev",
"laravelcollective/html": "^6.1",
"infyomlabs/adminlte-templates": "7.0.x-dev",
"doctrine/dbal": "~2.10.2",
"laravel/ui": "^2.0",
"yajra/laravel-datatables-buttons": "^4.9.1",
"yajra/laravel-datatables-html": "^4.27",
"yajra/laravel-datatables-oracle": "~9.10"`

## Licencia

[Licencia MIT](https://github.com/alejandro-ser/infyom-admin/blob/master/LICENSE)
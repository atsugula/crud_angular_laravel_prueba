# Realizacion pruebas full-stack

## Antes de empezar, el proyecto esta configurado para que se ejecute localmente 🚀

## Iniciando 🚀
_Hay que tener varias cosas en cuenta, para que el proyecto funcione correctamente, es por esto que les recomiendo y sigan las instrucciones_
_Inicialmente el proyecto estaba pensado para realizarse en Angular, pero ya que no tengo conocimiento de Angular lo realice en React_

### Instalación 🔧

_Clona el proyecto donde quieras_

```
git clone git@github.com:atsugula/crud_angular_laravel_prueba.git crud_prueba
```

_Instalación composer_

_Cambia a la carpeta donde clonaste el repositorio y abre la carpeta api, despues ejecuta el siguiente comando_

```
composer install
```

### Recuerda configurar los archivos para que laravel corra correctamente 🔧

_El archivo .env.example copialo, remplaza el nombre por .env, configura tu conexion a MYSQL y genera la clave_

```
php artisan key:generate
```
### Cracion de tablas y Base de datos 🔧
_Listo necesitamos ejecutar las migraciones y los seeders_

```
php artisan migrate --seed
```

### Corre los servidores 🚀
_En la carpeta de api ejecuta el siguiente comando_

```
php artisan serve
```

_Dirigete a la carpeta del frontend, para iniciar el server de React ejecutas_

```
npm start
```
_Recuerda que poreviamente debes tener Node.js descargado_

Notas para instalar y configurar el proyecto:

1) Clonar proyecto

2) Ir a carpeta config/livewire.php y comentar la siguiente linea
'asset_url' => url('/'),

3) Ejecutar 

composer install

Luego Ir a carpeta config/livewire.php y descomentar la siguiente linea
'asset_url' => url('/'),

4) Correr 

npm install

5) En el .env se ven los parametros de la bd. Los copio a continuacion:

DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

6) Instalar tailwind css ver la doc. oficial 
https://tailwindcss.com/docs/guides/laravel

7) Ejecutar las migraciones
php artisan migrate

8) Ingresar en su navegador web a la url: 
localhost/<nombre-proy>/public/


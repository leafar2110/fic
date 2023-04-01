# Proyecto Desafío FIC 

Para correr el proyecto se deben seguir las siguientes instrucciones en la terminal:




Clonar el repositorio de github SSH
```sh
git clone git@github.com:leafar2110/fic.git
```
Clonar el repositorio de github HTTPS
```sh
https://github.com/leafar2110/fic.git
```
Aceder a la carpeta clonada 
```sh
cd fic
```
Compilar y generar y levantar servicios de docker 
```sh
sudo docker-compose -f local.yml  up -d 
```

Apagar servicios de docker (para finalizar la ejecucion del proyecto)
```sh
sudo docker-compose -f local.yml  down
```

Aceder al contenedor donde se ejecuta laravel
```sh
docker exec -it fic-app bash
```

Deento de la consola del contenedor de laravel ejecutamos los siguentes comenados

Generamos llave privada 
```sh
php artisan key:generate
```

Ejecutar migraciones y cargar datos de pruebas y Usuario
```sh
php artisan migrate --seed
```

Dar permiso necesario a los directorios de storage
```sh
chmod -R 777 storage/logs/ && chmod -R 777 storage/framework/
```

Usuario por defecto para fines de prueba es: 

Email
```sh
yonnys@test.cl
```
Clave
```sh
password
```

# Logica del proyecto

He crearon 4 tabalas en total 

Zones -> Comunas

Categories -> Rubros

Documents -> Documentos

estas 3 bases de datos no se relacionan entre si, existe una 4ta base de datos 

asociative_documents -> es la relación de comunas rubros y documentos me valgo de esa relación y con un metodo en el modelo Document para retornar los ID de los documentos  que aparezcan en la tabla asociative_documents donde se cumpla rubro y comuna la solicitud

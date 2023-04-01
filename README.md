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

Se han crearon 4 nuevas tabalas 

zones -> Comunas

categories -> Rubros

documents -> Documentos

estas 3 tablas de base de dato no se relacionan entre si, existe una 4ta tabla en base de dato

asociative_documents -> esta tabla se relaciona directamente con las otras 3 tablas 

(zone_id, category_id, document_id) y en ella registro las diferentes combinaciones de documentos segun rubro y comuna y me valgo de esa relación para filtrar con un metodo (get_documents_name_by_zone_and_category()) en el modelo Document, que al recibir un array con el ID de la comuna y el ID del rubro retorna los nombres los documentos que segun la tabla (asociative_documents) se relacionan con esa combinacion 

# Proyecto Desafío FIC 

Para correr el proyecto se deben seguir las siguientes instrucciones en la terminal

```sh
    # Clonar el repositorio de github

    #ssh
    git clone git@github.com:leafar2110/fic.git

    #o

    #http
    git clone https://github.com/leafar2110/fic.git

    # Aceder a la carpeta clonada 
    cd fic

    # Compilar y generar y levantar servicios de docker
    sudo docker-compose -f local.yml  up -d 

    # Apagar servicios de docker (para finalizar la ejecucion del proyecto)
    sudo docker-compose -f local.yml  down

    #Aceder al contenedor donde se ejecuta laravel
    docker exec -it fic-app bash

        #Dentro de la consola del contenedor de laravel ejecutar los siguientes comandos

        #instalar dependencias del proyecto con composer 
        composer update

        #asegurar que todas las clases se esten leyendo
        composer dump-autoload

        #ejecutar migraciones y cargar datos de pruebas y Usuario
        php artisan migrate --seed
    
```
Usuario por defecto para fines de prueba

Email
```sh
yonnys@test.cl
```
Clave
```sh
password
```


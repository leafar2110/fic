# Proyecto Desafío FIC 

Para correr el proyecto se deben seguir las siguientes instrucciones en la terminal

```sh
    # Compilar y generar y levantar servicios de docker
    sudo docker-compose -f local.yml  up -d 

    # Apagar servicios de docker
    sudo docker-compose -f local.yml  down

    #aceder al contenedor donde se ejecuta laravel
    docker exec -it fic-app bas

    #instalar deependencias dl proyecto con composer 
    composer update

    #ejecutar migraciones con datos de pruebas 
    php artisan migrate --seed
```

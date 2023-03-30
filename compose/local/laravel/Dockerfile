# Utilizamos la imagen oficial de PHP 8
FROM php:8.0-fpm

# Instalamos las dependencias necesarias para Laravel y PHP
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libpq-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql zip

# Instalamos Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Configuramos la aplicación
WORKDIR /var/www

# Copiamos los archivos necesarios a la imagen
COPY fic/ /var/www

# Instalamos las dependencias de Composer
RUN composer update
RUN composer install --no-scripts --no-autoloader

# Generamos la llave de aplicación
RUN php artisan key:generate --force

# Compilamos los assets
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# Exponemos el puerto 9000 para acceder a la aplicación
EXPOSE 9000

# Ejecutamos el servidor PHP-FPM
CMD ["php-fpm"]

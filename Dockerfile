FROM php:8.2.4-apache
WORKDIR /var/www/html
RUN apt-get update && apt-get install -y  \
        zlib1g-dev \
        libzip-dev \
        libonig-dev \
        curl \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mysqli \
    && docker-php-source delete
COPY ./vhost.conf /etc/apache2/sites-available/000-default.conf
COPY ./ ./
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite






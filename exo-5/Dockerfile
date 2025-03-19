FROM php:8.3-apache


RUN apt-get update
RUN apt-get install git unzip -y

# Installing composer globally inside container
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer



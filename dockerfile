
FROM php:7.4-apache

RUN a2enmod rewrite

RUN apt-get update

# # # uma outra forma de instalar o composer php
		# RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
		# RUN php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" 
		# RUN php composer-setup.php 
		# RUN php -r "unlink('composer-setup.php');" 
# # # Fim da instruçao para instalar o docker composer

# # # maneira usada de instalar o docker compose usando o curl
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


# COPY ./apache2.conf /etc/apache2/
RUN apt-get install -y \
		libfreetype6-dev \
		libjpeg62-turbo-dev \
		libpng-dev

RUN docker-php-ext-install pdo pdo_mysql

# # # versao do composer inatalado nesse dockerfile
RUN composer --version

RUN apt-get update && apt-get -y upgrade && apt-get update 


# RUN service apache2 restart 
# COPY ./000-default.conf /etc/apache2/sites-available/


CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]



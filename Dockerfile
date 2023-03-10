#FROM geerlingguy/php-apache:latest
FROM php:8.0-apache

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN docker-php-ext-install -j "$(nproc)" opcache
RUN set -ex; \
  { \
    echo "; Cloud Run enforces memory & timeouts"; \
    echo "memory_limit = -1"; \
    echo "max_execution_time = 0"; \
    echo "; File upload at Cloud Run network limit"; \
    echo "upload_max_filesize = 1024M"; \
    echo "post_max_size = 1024M"; \
    echo "; Configure Opcache for Containers"; \
    echo "opcache.enable = On"; \
    echo "opcache.validate_timestamps = Off"; \
    echo "; Configure Opcache Memory (Application-specific)"; \
    echo "opcache.memory_consumption = 32"; \
  } > "$PHP_INI_DIR/conf.d/cloud-run.ini"

WORKDIR /var/www/html

#RUN rm /var/www/html/index.html
COPY . /var/www/html/.

RUN chmod -R 777 /var/www/html/fonts

RUN chmod -R 777 /var/www/html/fullcalendar
RUN chmod -R 777 /var/www/html/fullcalendar/demos
RUN chmod -R 777 /var/www/html/fullcalendar/packages
RUN chmod -R 777 /var/www/html/fullcalendar/vendor

RUN chmod -R 777 /var/www/html/images
RUN chmod -R 777 /var/www/html/images/banner
RUN chmod -R 777 /var/www/html/images/slideshow
RUN chmod -R 777 /var/www/html/images/uploads
RUN chmod -R 777 /var/www/html/images/users


RUN chmod -R 777 /var/www/html/private_files

RUN chmod -R 777 /var/www/html/request
RUN chmod -R 777 /var/www/html/request/passlist

RUN chmod -R 777 /var/www/html/Sound

RUN chmod -R 777 /var/www/html/tinymce

RUN chmod -R 777 /var/www/html/upload

RUN chmod -R 777 /var/www/html/vendor

RUN chmod -R 777 /var/www/html/video

RUN chmod -R 777 /var/www/html/chat

RUN chmod -R 777 /var/www/html/chat/upload

COPY ./ports.conf /etc/apache2/ports.conf
COPY ./apache.conf /etc/apache2/site-enabled/000-default.conf

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
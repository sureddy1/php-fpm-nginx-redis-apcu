#
# Dockerfile for php-fpm/nginx/apcu/redis
#
FROM mcr.microsoft.com/oryx/php:7.4-fpm

ENV SSH_PASSWD "root:Docker!"
ENV SSH_PORT 2222
COPY sshd_config /etc/ssh/

RUN set -x \
    && echo "$SSH_PASSWD" | chpasswd

RUN apt update \
    && apt install -y redis \
    && apt install -y nginx-extras

RUN pecl install -o -f redis \
    && rm -fr /tmp/pear \
    && echo "extension=redis.so" > /usr/local/etc/php/conf.d/docker-php-ext-redis.ini

RUN pecl install -o -f apcu \
    && rm -fr /tmp/pear \
    && echo "extension=apcu.so" > /usr/local/etc/php/conf.d/docker-php-ext-apcu.ini

COPY opcache-recommended.ini /usr/local/etc/php/conf.d/
COPY php-recommended.ini /usr/local/etc/php/conf.d/

COPY nginx/default.conf /etc/nginx/conf.d/
COPY nginx/nginx.conf /etc/nginx/

COPY php-fpm/docker.conf /usr/local/etc/php-fpm.d/
COPY php-fpm/www.conf /usr/local/etc/php-fpm.d/
COPY php-fpm/zz-docker.conf /usr/local/etc/php-fpm.d/


COPY init_container.sh /bin/
RUN chmod +x /bin/init_container.sh

EXPOSE $SSH_PORT 8080
ENTRYPOINT ["/bin/init_container.sh"]
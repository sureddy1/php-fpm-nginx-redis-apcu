#!/bin/bash

# set -e

echo "Starting SSH ..."
service ssh start

echo "INFO: creating /var/run/php/php-fpm.sock ..."
test -e /var/run/php/php-fpm.sock && rm -f /var/run/php/php-fpm.sock
mkdir -p /var/run/php
touch /var/run/php/php-fpm.sock

chown -R www-data:www-data /var/run/php/php-fpm.sock
chmod 777 /var/run/php/php-fpm.sock

echo "Starting nginx"
service nginx start

echo "Starting Redis"
redis-server &

echo "Starting php-fpm"
/usr/local/bin/docker-php-entrypoint php-fpm
#!/bin/bash

# set -e

echo "Starting SSH ..."
service ssh start

echo "Starting nginx"
service nginx start

echo "Starting php-fpm"
/usr/local/bin/docker-php-entrypoint php-fpm

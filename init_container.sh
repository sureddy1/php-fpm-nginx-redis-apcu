#!/bin/bash

# set -e

sed -i "s/SSH_PORT/$SSH_PORT/g" /etc/ssh/sshd_config
echo "Starting SSH ..."
service ssh start

echo "Starting nginx"
service nginx start

echo "Starting php-fpm"
/usr/local/bin/docker-php-entrypoint php-fpm

#
# Dockerfile for php-fpm/nginx/apcu/redis
#
FROM mcr.microsoft.com/oryx/php:7.4-fpm

ENV SSH_PASSWD "root:Docker!"
ENV SSH_PORT 2222

COPY init_container.sh /bin/
RUN chmod +x /bin/init_container.sh

EXPOSE $SSH_PORT 8080
ENTRYPOINT ["/bin/init_container.sh"]
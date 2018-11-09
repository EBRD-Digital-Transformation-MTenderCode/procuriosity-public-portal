#!/bin/bash
/usr/sbin/php-fpm
chmod -R 777 /var/run/php-fpm

cd /var/www/service && php vendor/ustudio/service_mandatory/ConfigServiceController.php
if [ ! -e .env ]
then
    echo ".env is not created"
    sleep 5
    exit 404
fi
php /var/www/service/init --env=Production --overwrite=y

php /var/www/service/yii migrate --interactive=0

php yii admin/create-role

php yii admin/create-user

chmod -R 777 /var/www/service/frontend/web/uploads


#/bin/bash
/usr/sbin/nginx -g 'daemon off;'
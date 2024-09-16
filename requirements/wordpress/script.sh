#!/bin/bash

if [ -f ./wp-config.php ]
then
	echo "wordpress already downloaded"
else

    curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
    chmod +x wp-cli.phar

    # Download WordPress core
    ./wp-cli.phar core download --allow-root || { echo "Failed to download WordPress";}

    # Create WordPress configuration
    ./wp-cli.phar config create --dbname=${WORDPRESS_DB_NAME} --dbuser=${WORDPRESS_DB_USER} --dbpass=${WORDPRESS_DB_PASSWORD} --dbhost=${WORDPRESS_DB_HOST} --allow-root || { echo "Failed to create config";}

    # Install WordPress
    ./wp-cli.phar core install --url=${DOMAIN_NAME} --title=${WORDPRESS_TITLE} --admin_user=${WORDPRESS_ADMIN_USER} --admin_password=${WORDPRESS_ADMIN_PASSWORD} --admin_email=${WORDPRESS_ADMIN_EMAIL} --allow-root || { echo "Failed to install WordPress";}

fi

echo 
php-fpm8.2 -F

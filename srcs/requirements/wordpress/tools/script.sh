#!/bin/bash

if [ -f "/var/www/html/wordpress/wp-config.php" ] 

then
	echo "wordpress already downloaded and configured"
else
    cd /var/www/html
    curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
    chmod +x wp-cli.phar

    # Download WordPress core
    ./wp-cli.phar core download --allow-root || { echo "Failed to download WordPress";}

    # Create WordPress configuration
    echo "config creation - ${DB_NAME}"
    ./wp-cli.phar config create --dbname=${DB_NAME} --dbuser=${DB_USER} --dbpass=${DB_PASS} --dbhost=${WP_DB_HOST} --allow-root || { echo "Failed to create config";}

    # Install WordPress
    ./wp-cli.phar core install --url=${DOMAIN_NAME} --title=${WP_TITLE} --admin_user=${WP_ADMIN_USER} --admin_password=${WP_ADMIN_PASS} --admin_email=${WP_ADMIN_EMAIL} --allow-root || { echo "Failed to install WordPress";}

    # Create user
    ./wp-cli.phar user create ${WP_USER} ${WP_USER_EMAIL} --role=${WP_USER_ROLE} --user_pass=${WP_USER_PASS} --allow-root
fi

php-fpm7.4 -F

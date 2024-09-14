#!/bin/bash

cd /var/www/html

if [ ! -f wp-cli.phar ]; then
    curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
    chmod +x wp-cli.phar
fi

if [ ! -f wp-config.php ]; then
    # Download WordPress core
    ./wp-cli.phar core download --allow-root || { echo "Failed to download WordPress"; exit 1; }

    # Create WordPress configuration
    ./wp-cli.phar config create --dbname=wordpress --dbuser=wpuser --dbpass=password --dbhost=mariadb --allow-root || { echo "Failed to create config"; exit 1; }

    # Install WordPress
    ./wp-cli.phar core install --url=localhost --title=inception --admin_user=admin --admin_password=admin --admin_email=admin@admin.com --allow-root || { echo "Failed to install WordPress"; exit 1; }

    # Create a new user
    ./wp-cli.phar user create newuser newuser@example.com --role=editor --user_pass=password --allow-root || { echo "Failed to create user"; exit 1; }
else
    echo "WordPress is already installed."
fi

php-fpm8.2 -F

#WP-CLI: WordPress Command Line Interface
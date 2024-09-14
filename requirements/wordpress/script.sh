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
    ./wp-cli.phar config create --dbname=$(WORDPRESS_DB_NAME) --dbuser=$(WORDPRESS_DB_USER) --dbpass=$(WORDPRESS_DB_PASSWORD) --dbhost=$(WORDPRESS_DB_HOST) --allow-root || { echo "Failed to create config"; exit 1; }

    # Install WordPress
    ./wp-cli.phar core install --url=$(DOMAIN_NAME) --title=inception --admin_user=$(WORDPRESS_ADMIN_USER) --admin_password=$(WORDPRESS_ADMIN_PASSWORD) --admin_email=$(WORDPRESS_ADMIN_EMAIL) --allow-root || { echo "Failed to install WordPress"; exit 1; }

else
    echo "WordPress is already installed."
fi

php-fpm8.2 -F

#WP-CLI: WordPress Command Line Interface
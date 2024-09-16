#!/bin/bash

mysql_install_db

# Substitute placeholders with actual values in init.sql
sed -i "s/__DB_NAME__/${DB_NAME}/g; s/__DB_USER__/${DB_USER}/g; s/__DB_PASS__/${DB_PASS}/g" /etc/mysql/init.sql

# Keep MariaDB running
mysqld


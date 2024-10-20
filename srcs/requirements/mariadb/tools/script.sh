#!/bin/bash

# This initializes the MariaDB/MySQL database system by setting up the initial system tables.

# This line uses the `sed` command to find and replace placeholders in the file `/etc/mysql/init.sql`.
# It replaces the placeholder `__DB_NAME__` with the value of the environment variable `DB_NAME`,
# `__DB_USER__` with the value of `DB_USER`, and `__DB_PASS__` with the value of `DB_PASS`.
# The `-i` flag makes these changes in-place, directly modifying the file.

    # Modifique o arquivo init.sql com as variáveis de ambiente
sed -i "s/__DB_NAME__/${DB_NAME}/g; s/__DB_USER__/${DB_USER}/g; s/__DB_PASS__/${DB_PASS}/g" /etc/mysql/init.sql
    
    # Inicialize o MariaDB com mysql_install_db
    
mysql_install_db

mysqld --init-file=/etc/mysql/init.sql


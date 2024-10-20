-- Create a database with the name stored in the placeholder __DB_NAME__.
-- The 'IF NOT EXISTS' clause ensures that the command does nothing if the database already exists.
CREATE DATABASE IF NOT EXISTS __DB_NAME__;

-- Create a new user with the name __DB_USER__.
-- The 'IF NOT EXISTS' clause ensures the user is only created if they don't already exist.
-- The user will be allowed to connect from any host (using '%') and is identified by the password __DB_PASS__.
CREATE USER IF NOT EXISTS '__DB_USER__'@'%' IDENTIFIED BY '__DB_PASS__';

-- Grant all privileges (like SELECT, INSERT, UPDATE, DELETE, etc.) on the database __DB_NAME__ to the newly created user __DB_USER__.
-- The '@' '%' means the user is allowed to connect from any IP address.
GRANT ALL PRIVILEGES ON __DB_NAME__.* TO '__DB_USER__'@'%';

-- Reload the privilege tables so that the changes (such as the new user and their permissions) take immediate effect.
FLUSH PRIVILEGES;

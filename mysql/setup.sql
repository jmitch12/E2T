-- This entire database can be constructed by running “source setup.sql” from mysql.
CREATE DATABASE `E2T` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;

USE `E2T`;

GRANT ALL PRIVILEGES ON E2T.* TO 'the_user'@'localhost' IDENTIFIED BY 'the_password';

source user.sql;
source recipe.sql;
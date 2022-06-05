CREATE DATABASE mariadb;
CREATE USER 'sorkim'@'%' IDENTIFIED BY 'sorkim';

GRANT ALL PRIVILEGES ON mariadb.* TO 'sorkim'@'%';
FLUSH PRIVILEGES;

ALTER USER 'root'@'localhost' IDENTIFIED BY 'sorkim';
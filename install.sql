-- supprime la base de données si elle existe (refresh)
DROP DATABASE IF EXISTS `db_design`; 

-- suppression de l'utilisateur 'admin' s'il existe - dans la table 'mysql' de mysql - (refresh)
DELETE FROM mysql.user WHERE user='admin' and host='admin';

-- création de la base de données
CREATE DATABASE `db_design` 
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_unicode_ci;

-- création d'un utilisateur spécifique qui n'aura que des droits sur une base de données déterminée (ici db_robot)
GRANT ALL PRIVILEGES ON `db_design`.* to 'admin'@'localhost' IDENTIFIED BY 'admin' WITH GRANT OPTION; 
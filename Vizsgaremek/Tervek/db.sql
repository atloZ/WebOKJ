-- felhasználok
-- - id
-- - user
-- - pass
-- - aktiv
-- - tipus
-- - profilkép
-- - bio

-- poszt
-- - id
-- - kat id
-- - cim
-- - leirás
-- - tulajdonos id
-- - aktiv
-- - kiadásdátum

-- kategoria
-- - id
-- - nev

CREATE DATABASE IF NOT EXISTS blog CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS blog.users(
   user_id INT NOT NULL AUTO_INCREMENT,
   user_name VARCHAR(128) NOT NULL,
   user_pass VARCHAR(128) NOT NULL,
   user_type VARCHAR(128) NOT NULL,
   user_pic VARCHAR(128) NOT NULL,
   user_bio VARCHAR(128) NOT NULL,
   user_active TINYINT NOT NULL,
   PRIMARY KEY ( user_id )
);

CREATE TABLE IF NOT EXISTS blog.posts(
   post_id INT NOT NULL AUTO_INCREMENT,
   post_kat_id INT NOT NULL,
   post_name VARCHAR(128) NOT NULL,
   post_description VARCHAR(128) NOT NULL,
   user_id INT NOT NULL,
   post_active TINYINT NOT NULL,
   post_create datetime not null,
   PRIMARY KEY ( prod_id )
);

CREATE TABLE IF NOT EXISTS blog.cat(
   cat_id INT NOT NULL AUTO_INCREMENT,
   cat_name VARCHAR(128) NOT NULL,
   PRIMARY KEY ( prod_id )
);
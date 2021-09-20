CREATE DATABASE IF NOT EXISTS webapp CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS webapp.users(
   user_id INT NOT NULL AUTO_INCREMENT,
   user_name VARCHAR(128) NOT NULL,
   user_pass VARCHAR(128) NOT NULL,
   PRIMARY KEY ( user_id )
);

-- CREATE TABLE IF NOT EXISTS webapp.products(
--    prod_id INT NOT NULL AUTO_INCREMENT,
--    prod_name VARCHAR(128) NOT NULL,
--    prod_price INT NOT NULL,
--    prod_available TINYINT NOT NULL,
--    PRIMARY KEY ( prod_id )
-- );
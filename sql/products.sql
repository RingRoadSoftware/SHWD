SET @@AUTOCOMMIT = 1;

DROP DATABASE IF EXISTS products;
CREATE DATABASE products;

USE products;

CREATE TABLE productInventory(
id int(11) NOT NULL,
pName varchar(100) NOT NULL,
price int(11) NOT NULL,
description text NOT NULL,
available int(11) NOT NULL,
category varchar(100) NOT NULL,
pPage varchar(20) NOT NULL,
picture text NOT NULL
) AUTO_INCREMENT = 1;

CREATE user IF NOT EXISTS dbadmin@localhost;
GRANT all privileges ON products.productInventory TO dbadmin@localhost;

INSERT INTO productInventory (id, pName, price, description, available, category, item, pPage, picture) VALUES
(1, 'Product1', 69, 'A product description', 69, 'Closed-Back Headphones', 'product1.php', 'productpic1.jpg'),
(2, 'Product2', 69, 'A product description', 420, 'Open-Back Headphones', 'product2.php', 'productpic2.jpg'),
(3, 'Product3', 69, 'A product description', 21, 'IEMs', 'product3.php', 'productpic3.jpg'),
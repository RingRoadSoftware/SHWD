SET @@AUTOCOMMIT = 1;

DROP DATABASE IF EXISTS products;
CREATE DATABASE products;

USE products;

CREATE TABLE productInventory(
    productID int(11) NOT NULL,
    pName varchar(100) NOT NULL,
    price int(11) NOT NULL,
    description text NOT NULL,
    available int(11) NOT NULL,
    category varchar(100) NOT NULL,
    pPage varchar(20) NOT NULL,
    picture text NOT NULL,
    primary key(productID)
) AUTO_INCREMENT = 1;

CREATE TABLE customerInfo(
    customerID int(11),
    cardName varchar(100),
    expirationDate varchar (20),
    securityCode int(3),
    fName varchar(100),
    lName varchar(100),
    mobileNo int(10),
    address text,
    company varchar(100),
    primary key(customerID)
) AUTO_INCREMENT = 1;

CREATE TABLE transaction(
    transactionID int(11) NOT NULL,
    customerID int(11) NOT NULL,
    productID int(11) NOT NULL,
    purchaseTime time NOT NULL,
    purchaseDate date NOT NULL,
    primary key(transactionID),
    foreign key(customerID) references customerInfo(customerID),
    foreign key(productID) references productInventory(productID)
) AUTO_INCREMENT = 1;

CREATE user IF NOT EXISTS dbadmin@localhost;
GRANT all privileges ON products.productInventory TO dbadmin@localhost;

INSERT INTO productInventory (productID, pName, price, description, available, category, item, pPage, picture) VALUES
('P01', 'Product1', 69, 'A product description', 69, 'Closed-Back Headphones', 'hd800s.php', 'HD800S.jpg'),
('P02', 'Product2', 69, 'A product description', 420, 'Open-Back Headphones', 'ananda.php', 'ANANDA.jpg'),
('P03', 'Product3', 69, 'A product description', 21, 'IEMs', 'ananda.php', 'HD6XX.jpg'),
('P04', 'Product4', 69, 'A product description', 21, 'IEMs', 'he4xx.php', 'HE4XX.jpg'),
('P05', 'Product5', 69, 'A product description', 21, 'IEMs', 'product3.php', 'productpic3.jpg'),
('P06', 'Product6', 69, 'A product description', 21, 'IEMs', 'product3.php', 'productpic3.jpg'),
('P07', 'Product7', 69, 'A product description', 21, 'IEMs', 'product3.php', 'productpic3.jpg'),
('P08', 'Product8', 69, 'A product description', 21, 'IEMs', 'product3.php', 'productpic3.jpg'),
('P09', 'Product9', 69, 'A product description', 21, 'IEMs', 'product3.php', 'productpic3.jpg'),
('P10', 'Product10', 69, 'A product description', 21, 'IEMs', 'product3.php', 'productpic3.jpg');

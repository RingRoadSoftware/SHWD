SET @@AUTOCOMMIT = 1;

DROP DATABASE IF EXISTS products;
CREATE DATABASE products;

USE products;

CREATE TABLE productInventory(
    productID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    pName varchar(100) NOT NULL,
    price int(11) NOT NULL,
    description text NOT NULL,
    available int(11) NOT NULL,
    category varchar(100) NOT NULL,
    pPage varchar(20) NOT NULL,
    picture text NOT NULL,
    cart boolean NOT NULL DEFAULT 0
) AUTO_INCREMENT = 1;

CREATE TABLE paymentInfo(
    paymentID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cardName varchar(100) NOT NULL,
    cardNumber varchar(100) NOT NULL,
    expirationDate varchar (20) NOT NULL,
    cvv int(3) NOT NULL,
    active boolean NOT NULL DEFAULT 0
) AUTO_INCREMENT = 1;

CREATE TABLE shippingInfo(
    shippingID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fName varchar(100) NOT NULL,
    lName varchar(100) NOT NULL,
    mobileNo varchar(100) NOT NULL,
    address text NOT NULL,
    zipcode varchar(100) NOT NULL,
    company varchar(100),
    active boolean NOT NULL DEFAULT 0
) AUTO_INCREMENT = 1;

CREATE TABLE transaction(
    transactionID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    paymentID int NOT NULL,
    shippingID int NOT NULL,
    productID int NOT NULL,
    purchaseTime timestamp NOT NULL,
    foreign key(paymentID) references paymentInfo(paymentID),
    foreign key(shippingID) references shippingInfo(shippingID),
    foreign key(productID) references productInventory(productID)
) AUTO_INCREMENT = 1;

CREATE user IF NOT EXISTS dbadmin@localhost;
GRANT all privileges ON products.productInventory TO dbadmin@localhost;
GRANT all privileges ON products.paymentInfo TO dbadmin@localhost;
GRANT all privileges ON products.shippingInfo TO dbadmin@localhost;
GRANT all privileges ON products.transaction TO dbadmin@localhost;

INSERT INTO productInventory (productID, pName, price, description, available, category, pPage, picture) VALUES
(1, 'Product1', 69, 'A product description', 69, 'Closed-Back Headphones', 'hd800s.php', 'HD800S.jpg'),
(2, 'Product2', 69, 'A product description', 420, 'Open-Back Headphones', 'ananda.php', 'ANANDA.jpg'),
(3, 'Product3', 69, 'A product description', 21, 'IEMs', 'ananda.php', 'HD6XX.jpg'),
(4, 'Product4', 69, 'A product description', 21, 'IEMs', 'he4xx.php', 'HE4XX.jpg'),
(5, 'Product5', 69, 'A product description', 21, 'IEMs', 'product3.php', 'productpic3.jpg'),
(6, 'Product6', 69, 'A product description', 21, 'IEMs', 'product3.php', 'productpic3.jpg'),
(7, 'Product7', 69, 'A product description', 21, 'IEMs', 'product3.php', 'productpic3.jpg'),
(8, 'Product8', 69, 'A product description', 21, 'IEMs', 'product3.php', 'productpic3.jpg'),
(9, 'Product9', 69, 'A product description', 21, 'IEMs', 'product3.php', 'productpic3.jpg'),
(10, 'Product10', 69, 'A product description', 21, 'IEMs', 'product3.php', 'productpic3.jpg');

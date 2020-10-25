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
(1, 'HD800S', 2499, 'Dynamic Driver', 69, 'Open-Back Headphones', 'hd800s.php', 'HD800S.jpg'),
(2, 'Ananda', 1199, 'Planar Magnetic Driver', 420, 'Open-Back Headphones', 'ananda.php', 'ANANDA.jpg'),
(3, 'HD6XX', 280, 'Planar Magnetic Driver', 21, 'Open-Back Headphones', 'HD6XX.php', 'HD6XX.jpg'),
(4, 'HE4XX', 6200, 'Planar Magnetic Driver', 21, 'Open-Back Headphones', 'he4xx.php', 'HE4XX.jpg'),
(5, 'LCD3', 3049, 'Planar Magnetic Driver', 21, 'Open-Back Headphones', 'LCD3.php', 'LCD3.jpg'),
(6, 'SR80E', 169, 'Dynamic Driver', 21, 'Open-Back Headphones', 'sr80e3.php', 'SR80E.jpg'),
(7, 'WH1000XM4', 400, 'Dynamic Driver', 21, 'Closed-Back Headphones', 'sale.php', 'wh1000xm4.jpg'),
(8, 'ATHM40X', 169, 'Dynamic Driver', 21, 'Closed-Back Headphones', 'm40x.php', 'ATHM40X.jpg'),
(9, 'L700', 2199, 'Electrostatic Driver', 21, 'Open-Back Headphones', 'L700.php', 'L700.jpg'),
(10, 'Clear', 1199, 'Dynamic Driver', 21, 'Open-Back Headphones', 'CLEAR.php', 'CLEAR.jpg');

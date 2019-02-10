# Derek Will
# Web Database Development
# Assignment 4 - Database build script


DROP DATABASE IF EXISTS ecommerce;

CREATE DATABASE ecommerce;
USE ecommerce;

    
CREATE TABLE customer_images (
	image_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    filename VARCHAR(255) NOT NULL,
    image_type VARCHAR(100) NOT NULL,
    image_data LONGBLOB NOT NULL,
    image_email VARCHAR(200) NULL
    );
    
    
CREATE TABLE customers (
	customer_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(200) NOT NULL UNIQUE,
	pass CHAR(60) NOT NULL,
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL,
    image_id INT UNSIGNED NULL,
    date_created DATETIME DEFAULT CURRENT_TIMESTAMP,
    INDEX login (email, pass),
    foreign key (image_id) references customer_images(image_id)
    );
    
    
/* INSERT INTO customers (email, pass) VALUES ('dwill_85@hotmail.com', 'test123'); */
                        
                        
CREATE TABLE products (
	product_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	prod_name VARCHAR(255) CHARACTER SET utf8 NOT NULL,
	prod_desc TEXT(500) CHARACTER SET utf8 NOT NULL,
    prod_feature1 TEXT(100) CHARACTER SET utf8 NOT NULL,
    prod_feature2 TEXT(100) CHARACTER SET utf8 NOT NULL,
    prod_feature3 TEXT(100) CHARACTER SET utf8 NOT NULL,
    prod_feature4 TEXT(100) CHARACTER SET utf8 NOT NULL,
	prod_price DECIMAL(9,2) NOT NULL,
    product_slogan VARCHAR(255) NULL,
    in_stock TINYINT (12) NOT NULL DEFAULT 1,
    quantity INT(10) UNSIGNED NOT NULL,
    date_added TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (product_id), FULLTEXT (prod_name), FULLTEXT (prod_desc)
    );
    /* INSERT INTO products (prod_name, prod_desc, prod_price, product_slogan, in_stock, quantity, date_added)
VALUES ("The Boom Stick", "The twelve-gauge double-barreled Remington. S-Mart's top of the line. You can find this in the sporting goods department. That's right, this sweet baby was made in Grand Rapids, Michigan. It's got a walnut stock, cobalt blue steel, and a hair trigger. That's right", 109.95, "This is my BOOM stick!!", 1, 12, now()); */
                        
                        
CREATE TABLE orders (
	order_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	customer_id INT UNSIGNED NOT NULL,
	product_id INT UNSIGNED NOT NULL,
    price DECIMAL(6,2) NOT NULL,
    order_qty INT UNSIGNED NOT NULL DEFAULT 1,
    order_total DECIMAL(6,2) NOT NULL,
    order_date TIMESTAMP,
	PRIMARY KEY (order_id)
    );
                        
/*
CREATE TABLE testimonials (
	testimonial_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	testifier_id VARCHAR(50) NOT NULL,
	testifier_comments VARCHAR(1000) NOT NULL,
    testimonial_date TIMESTAMP,
	PRIMARY KEY (testimonial_id)
    );
*/
    
/* SELECT * FROM customer_images;

SELECT * FROM customers;


SELECT * FROM customers c JOIN customer_images USING (image_id); */
/* DELETE FROM customers WHERE customer_id = 1; */



/* INSERT PRODUCTS */
INSERT INTO products (prod_name, prod_desc, prod_feature1, prod_feature2, prod_feature3, prod_feature4, prod_price, product_slogan, in_stock, quantity, date_added)
VALUES (
"The Boom Stick",
"The twelve-gauge double-barreled Remington. S-Mart's top of the line. You can find this in the sporting goods department. That's right, this sweet baby was made in Grand Rapids, Michigan. It's got a walnut stock, cobalt blue steel, and a hair trigger.",
"Twelve-gauge",
"Double-barreled",
"Walnut Stock",
"Hair trigger",
109.95,
"This is my BOOM stick!!",
12,
12,
now()
);


INSERT INTO products (prod_name, prod_desc, prod_feature1, prod_feature2, prod_feature3, prod_feature4, prod_price, product_slogan, in_stock, quantity, date_added)
VALUES (
"Homelite XL Chainsaw",
"The Homelite XL chainsaw is just an ordinary chainsaw, with a chained blade, pull-cord, and handle. However, it has a small, circular hole in the bottom, made specifically for anyone missing their hand. Also, this chainsaw has a rather uncommon ability to cut through bone and flesh with ease and has a seemingly endless supply of fuel.",
"Red Exterior",
"Cuts through bone like butter - great for dismembering Deadites",
"Little to no gas consumption",
"Effortless pull string start",
21.95,
"What? You never saw a guy with a chainsaw hand before?",
3,
3,
now()
);


INSERT INTO products (prod_name, prod_desc, prod_feature1, prod_feature2, prod_feature3, prod_feature4, prod_price, product_slogan, in_stock, quantity, date_added)
VALUES (
"Metal Gauntlet",
"This metal gauntlet is created using medieval armor and miscellaneous parts from a 1973 Oldsmobile Delta. It is a right hand replacement for the Homelite XL Chainsaw. It has a VERY powerful grip as demonstrated by crushing an iron goblet.",
"Right hand replacement",
"Sophisticated design using medieval armor and Oldsmobile parts",
"Very powerful grip",
"All around groovy",
35.95,
"Groovy.",
20,
20,
now()
);


INSERT INTO products (prod_name, prod_desc, prod_feature1, prod_feature2, prod_feature3, prod_feature4, prod_price, product_slogan, in_stock, quantity, date_added)
VALUES (
"Deathcoaster",
"When you need to bring out the big guns against the Army of Darkness, the Deathcoaster is a must have. It is custom built using an Oldsmobile Delta 88 as the base, armord with wood to prevent arrow attacks, and equipped with a massive rotating blade on the hood for clearing large crowds of Deadites.",
"1973 Oldsmobile Delta 88 base",
"8 cylinder engine with 150 horsepower",
"Ideal for clearing large groups of Deadites",
"All around fun to drive",
10000.95,
"Say hello to the 21st Century!",
1,
1,
now()
);
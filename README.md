# classified_ads_php_mysql

## Create database
CREATE DATABASE classifiedads;

## Create table
CREATE TABLE users (
	id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

CREATE TABLE ads (
	id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    text VARCHAR(255) NOT NULL,
    category VARCHAR(50) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

## Filling out the table
INSERT INTO users VALUES
(NULL, 'John', 'johndoe@gmail.com', '12345'),
(NULL, 'Jane', 'janedoe@gmail.com', '12345');

INSERT INTO ads VALUES
(NULL, 'Monitor Acer 900', 'I am selling a used monitor', 'computers', 14000, 1),
(NULL, 'Samsung S20', 'I am selling a used, well-preserved phone.', 'mobile phones', 35000, 2);

### `Classified ads` :point_right: [Live Demo](https://maxidesign.eu.org/index.php) :point_left: just do a CTRL+click (to open :link: in a new tab)

<div align="center">
<img src="https://myoctocat.com/assets/images/base-octocat.svg" alt="myoctocat" width="200">
</div>

<div align="center">
<a href="https://webdizajnmaxi.eu.org">By Maxi</a>
</div>

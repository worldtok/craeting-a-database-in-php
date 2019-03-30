<?php
//connection variables
$host = 'localhost';
$user = 'root';
$password = '';

//create mysql connection
$mysqli = new mysqli($host,$user,$password);
if ($mysqli->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    die();
}

//create the database
if ( !$mysqli->query('CREATE DATABASE maduka') ) {
    printf("Errormessage: %s\n", $mysqli->error);
}

//create users table with all the fields
$mysqli->query('
CREATE TABLE `WORLDTOK`.`USERS`
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `first_name` VARCHAR(50) NOT NULL,
     `last_name` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `hash` VARCHAR(32) NOT NULL,
    `active` BOOL NOT NULL DEFAULT 0,
PRIMARY KEY (`id`) 
);') or die($mysqli->error);


INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `hash`, `active`) VALUES

( 'Worldtok 3', 'Emmanuel', 'info@worldtok.com', 'password', ‘hash(pasword)’, ‘1’),

( 'Worldtok 1', ' Emmanuel ', 'info@worldtok.com', ' password', ‘hash(pasword)’ , ‘1’),

( 'Worldtok 2', ' Emmanuel ', 'info@worldtok.com', ' password', ’hash(pasword)’ , ‘1’),

( 'Worldtok 3', ' Emmanuel ', 'info@worldtok.com', ' password’, ‘hash(pasword)’ , ‘1’),

( 'Worldtok 5', 'Emmanuel', 'info@worldtok.com', ' password', ’hash(pasword)’ , ‘1’),

( 'Worldtok 6', ' Emmanuel ', 'info@worldtok.com', ' password', ‘hash(pasword)’ , ‘1’),

( 'Worldtok 7', ' Emmanuel ', 'info@worldtok.com', '25', ‘hash(pasword)’ , ‘1’);

?>
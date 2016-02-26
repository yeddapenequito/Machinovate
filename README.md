# Machinovate
This git is for the creation of website for Machinovate


/*--------------------------------------------------
SQL QUERIES
----------------------------------------------------*/

USE machinovate;


//AGENTS TABLE


CREATE TABLE agents (
agent_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
first_name VARCHAR(20) NOT NULL,
last_name VARCHAR(40) NOT NULL,
country VARCHAR(30) NOT NULL,
country_num VARCHAR(2)NOT NULL,
email VARCHAR(60) NOT NULL,
contact VARCHAR(60),
PRIMARY KEY (agent_id)
);
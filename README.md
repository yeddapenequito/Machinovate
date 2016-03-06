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

/*----------------------------------------------
TENTATIVE SQL QUERIES - DONT EXECUTE YET!!
-----------------------------------------------*/

CREATE TABLE misc_machine_pushcart_specs(
	model_id VARCHAR(10) NOT NULL,
	capacity SMALLINT NOT NULL ,
	min_roll_diameter SMALLINT NOT NULL,
	max_roll_diameter SMALLINT NOT NULL,
	frame_width SMALLINT NOT NULL,
	fork_length SMALLINT NOT NULL,
	PRIMARY KEY (model_id)
);

CREATE TABLE misc_machine_bailing_specs(
	model_id VARCHAR(10) NOT NULL,
	pressure SMALLINT NOT NULL,
	inner_size_dimension VARCHAR NOT NULL,
	pump VARCHAR NOT NULL,
	oil_pump VARCHAR NOT NULL,
	motor SMALLINT NOT NULL,
	weight FLOAT(6, 2) NOT NULL,
	PRIMARY KEY (model_id)
);

CREATE TABLE sheeter_specs(
	model_id VARCHAR(10) NOT NULL,
	production_vol SMALLINT NOT NULL,
	paper_type VARCHAR NOT NULL,
	GSM_MIN SMALLINT NOT NULL,
	GSM_MAX SMALLINT NOT NULL,
	ROLL_DIAMETER_MIN FLOAT(6, 2) NOT NULL,
	ROLL_DIAMETER_MAX FLOAT(6, 2) NOT NULL,
	CUT_OFF_LENGTH_MIN FLOAT(6, 2) NOT NULL,
	CUT_OFF_LENGTH_MAX FLOAT(6, 2) NOT NULL,
	WEB_WIDTH FLOAT(6, 2) NOT NULL,
	MODEL_TYPE VARCHAR NOT NULL,
	MAIN_DRIVE VARCHAR NOT NULL,
	KNIFE VARCHAR NOT NULL,
	SLITTER VARCHAR, --?? required or not?
	SLITTER_MAX SMALLINT,
	ACCESSORIES VARCHAR NOT NULL,
	REEL_STAND VARCHAR NOT NULL,
	SHAFT VARCHAR NOT NULL,
	SHAFT_MECHANICAL_SHAFT VARCHAR, 
	SHAFT_AIR_SHAFT_CORE FLOAT(6, 2),
	SHAFT_AIR_SHAFT_ROLL_WEIGHT FLOAT(6, 2),
	SYSTEMS VARCHAR NOT NULL,
	PRIMARY KEY (model_id)
);

CREATE TABLE events (
	event_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	event_date DATE NOT NULL,
	event_name VARCHAR(60) NOT NULL,
	event_place VARCHAR(60) NOT NULL,
	PRIMARY KEY (event_id)
	--
) ENGINE=MyISAM;

CREATE TABLE event_pictures (
	pic_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	event_id INT UNSIGNED NOT NULL,
	image_name VARCHAR(60) NOT NULL,
	caption VARCHAR(255) NOT NULL,
	PRIMARY KEY (pic_id)
	--
) ENGINE=MyISAM;

CREATE TABLE shipping_details (
	shipping_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	last_name VARCHAR(30) NOT NULL,
	first_name VARCHAR(30) NOT NULL,
    company_name VARCHAR(60) NOT NULL,
    address VARCHAR(60) NOT NULL,
	contact_details VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    delivery_basis VARCHAR(30) NOT NULL,
    ship_day TINYINT(3) NOT NULL,
    term VARCHAR(30) NOT NULL,
    confirmation TINYINT(2),
    shipment TINYINT(2),
    installation TINYINT(2),
	PRIMARY KEY (shipping_id)
	--
) ENGINE=MyISAM;


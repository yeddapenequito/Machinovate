TABLES:
/*
CREATE TABLE machine_categories (
	category_id TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
	category_name VARCHAR(20) NOT NULL,
	category_description TINYTEXT NULL,
	PRIMARY KEY (category_id),
	UNIQUE (category_name)
) ENGINE=MyISAM;
*/
CREATE TABLE machine_models (
	model_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
	category_name VARCHAR(20) NOT NULL,
	model_name VARCHAR(20) NOT NULL,
	model_description VARCHAR(512) NULL,
	product_image VARCHAR(256) NULL,
	PRIMARY KEY (model_id),
	UNIQUE (model_name)
) ENGINE=MyISAM;

--cmsr - customized machine specification request
----possible error: model_type on csmr tables

cmsr_cutter
id SMALLINT
order_id SMALLINT
model_type TINYTEXT
---------specs----------
-------------------------

CREATE TABLE cmsr_sheeter (
	cmsr_sheeter_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
	order_id SMALLINT UNSIGNED NOT NULL,
	
	Shitter_Type VARCHAR(20) NOT NULL,
	Production_Volume FLOAT(6,2) UNSIGNED NOT NULL,
	Paper_Type VARCHAR(32) NOT NULL,
	GSM VARCHAR(20) NOT NULL,
	Roll_Diameter VARCHAR(20) NOT NULL,
	Cutt_Off_Length VARCHAR(20) NOT NULL,
	Slitting_Width VARCHAR(20) NOT NULL,
	
	Cutting_MainDrive VARCHAR(20) NOT NULL,
	Cutting_Knife VARCHAR(20) NOT NULL,
	Cutting_Slitter Cutting_MainDrive VARCHAR(20) NULL,
	Cutting_SlitterMax TINYINT(2) NULL DEFAULT 0,
	
	URS_HydraulicShaftless TINYINT(1) UNSIGNED NULL DEFAULT 0,
	URS_HydraulicRadio VARCHAR(20) NULL DEFAULT 'N/A',
	URS_StandardReel TINYINT(1) UNSIGNED NULL DEFAULT 0,
	URS_StandardReelRadio VARCHAR(20) NULL DEFAULT 'N/A',
	URS_AutoTension TINYINT(1) UNSIGNED NULL DEFAULT 0,
	URS_IndivAutoTension TINYINT(1) UNSIGNED NULL DEFAULT 0,
	
	URS_RollWeight FLOAT(6,2) UNSIGNED NOT NULL,
	
	Sys_ComputerControl TINYINT(1) UNSIGNED NULL DEFAULT 0,
	Sys_WebGuideHydraulicEPC TINYINT(1) UNSIGNED NULL DEFAULT 0,
	Sys_Others VARCHAR(128) NULL DEFAULT 'N/A',

	Other_Details VARCHAR(2048) NULL DEFAULT 'N/A',
	
	PRIMARY KEY (cmsr_sheeter_id)
) ENGINE=InnoDB;



CREATE TABLE slitter (
	
	order_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
	
	Slitter_Type VARCHAR(20) NOT NULL,
	Production_Volume FLOAT(6,2) UNSIGNED NOT NULL,
	Paper_Type VARCHAR(32) NOT NULL,
	GSM_Min SMALLINT UNSIGNED NOT NULL,
	GSM_Max  SMALLINT UNSIGNED NOT NULL,
	GSM_Unit  VARCHAR(20) NOT NULL,
	Roll_Diameter_Min SMALLINT UNSIGNED NOT NULL,
	Roll_Diameter_Max SMALLINT UNSIGNED NOT NULL,
	Roll_Diameter_Unit  VARCHAR(20) NOT NULL,
	Slitting_Width_Min SMALLINT UNSIGNED NOT NULL,
	Slitting_Width_Max SMALLINT UNSIGNED NOT NULL,
	Slitting_Width_Unit  VARCHAR(20) NOT NULL,
	Slitting_Width VARCHAR(20) NOT NULL,
	
	Cutting_Standard VARCHAR(20) NULL DEFAULT 'N/A',
	Cutting_Additional_CB VARCHAR(20) NULL DEFAULT 'N/A',
	Cutting_AddtlBlade TINYINT(2) UNSIGNED NULL DEFAULT 0,
	Cutting_CoreCutterMachine VARCHAR(20) NULL DEFAULT 'N/A',
	
	URS_HydraulicShaftless VARCHAR(20) NULL DEFAULT 'N/A',
	URS_Single VARCHAR(20) NULL DEFAULT 'N/A',
	URS_Customized VARCHAR(20) NULL DEFAULT 'N/A', 
	URS_ShaftStand VARCHAR(20) NULL DEFAULT 'N/A',
	URS_OtherReel VARCHAR(20) NULL DEFAULT 'N/A',
	URS_Others VARCHAR(128) NULL DEFAULT 'N/A',
	URS_TonCapacity SMALLINT UNSIGNED NOT NULL,
	
	Sys_WebGuideHydraulicEPC VARCHAR(255) NULL DEFAULT 'N/A',
	Sys_Tension VARCHAR(255) NULL DEFAULT 'N/A',
	Sys_BananaRoll_TensionRoller VARCHAR(255) NULL DEFAULT 'N/A',
	Sys_BrakeSystem VARCHAR(255) NULL DEFAULT 'N/A',
	Sys_FullyComputerized VARCHAR(255)  NULL DEFAULT 'N/A',
	Sys_OthersCheckbox VARCHAR(255)  NULL DEFAULT 'N/A',
	Sys_Others VARCHAR(128) NULL DEFAULT 'N/A',

	Other_Details VARCHAR(2048) NULL DEFAULT 'N/A',
	
	PRIMARY KEY (order_id)
) ENGINE=InnoDB;
INSERT INTO cmsr_slitter(order_id, Slitter_Type, Production_Volume, Paper_Type, GSM, Roll_Diameter, Slitting_Width, Cutting_AddtlBlade, Cutting_CoreCutterMachine, URS_HydraulicShaftless, URS_Single, URS_Customized, URS_ShaftStand, URS_Others, URS_TonCapacity, Sys_WebGuideHydraulicEPC, Sys_Tension, Sys_BananaRoll_TensionRoller, Sys_BrakeSystem, Sys_FullyComputerized, Sys_Others, Other_Details) VALUES(1, 'MSR', 6.02, 'carbon', '88 - 88', '88 - 88', '88 - 88', 123, 1, 1, 1, 1, 1, '0', 5, 0, 0, 0, 0, 0, '', 'asdf');

CREATE TABLE cmsr_cutter {
	cmsr_cutter_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
	order_id SMALLINT UNSIGNED NOT NULL,

	Cutter_Type VARCHAR(20) NOT NULL,

	Other_Details VARCHAR(2048) NULL DEFAULT 'N/A',
	
	PRIMARY KEY (cmsr_slitter_id)

} ENGINE=InnoDB;

CREATE TABLE cmsr_bailing {
	cmsr_bailing_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
	order_id SMALLINT UNSIGNED NOT NULL,

	Bailing_Quantity TINYINT(2) NOT NULL,

	Other_Details VARCHAR(2048) NULL DEFAULT 'N/A',
	
	PRIMARY KEY (cmsr_bailing_id)

} ENGINE=InnoDB;

CREATE TABLE cmsr_paper_roll {
	cmsr_paper_roll_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
	order_id SMALLINT UNSIGNED NOT NULL,

	Paper_Roll_Quantity TINYINT(2) NOT NULL,

	Other_Details VARCHAR(2048) NULL DEFAULT 'N/A',
	
	PRIMARY KEY (cmsr_bailing_id)

} ENGINE=InnoDB;
--
/*
CREATE TABLE cmsr_slitter (
	cmsr_slitter_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
	order_id SMALLINT UNSIGNED NOT NULL,
	
	slitter_type VARCHAR(20) NOT NULL,
	production_volume FLOAT(6,2) UNSIGNED NOT NULL,
	paper_type VARCHAR(32) NOT NULL,
	gsm VARCHAR(20) NOT NULL,
	roll_diameter VARCHAR(20) NOT NULL,
	slitting_width VARCHAR(20) NOT NULL,
	
	slitter_cutting VARCHAR(256) NOT NULL,
	
	reel_stand VARCHAR(512) NOT NULL,
	ton_capacity FLOAT(6,2) UNSIGNED NOT NULL,
	
	systems VARCHAR(1024) NOT NULL,
	
	other_details VARCHAR(2048) NULL,
	
	PRIMARY KEY (cmsr_slitter_id)
) ENGINE=InnoDB;
*/
/*cmsr_misc_machines
id SMALLINT
order_id SMALLINT
model_type TINYTEXT
---------specs----------
-------------------------
*/


CREATE TABLE customers (
	customer_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
	company_id SMALLINT UNSIGNED NOT NULL,
	email VARCHAR(80) NULL,
	first_name VARCHAR(50) NOT NULL,
	last_name VARCHAR(40) NOT NULL,
	PRIMARY KEY (customer_id)
) ENGINE=InnoDB;

CREATE TABLE companies (
	company_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
	company_name VARCHAR(40) NOT NULL,
	company_address VARCHAR(80) NOT NULL,
	company_contactNo VARCHAR(40) NOT NULL,
	company_email VARCHAR(80) NOT NULL,
	PRIMARY KEY (company_id),
	UNIQUE (company_name)
) ENGINE=InnoDB;

CREATE TABLE orders ( --plus shipping_details
	order_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
	customer_id SMALLINT UNSIGNED NOT NULL,
	shipping_id SMALLINT UNSIGNED NOT NULL,
	order_date TIMESTAMP,
	order_status ENUM('COMPLETED', 'PENDING', 'CONFIRMED', 'CANCELLED') NOT NULL,
	PRIMARY KEY (order_id)
) ENGINE=InnoDB;


CREATE TABLE shipping_details (
	shipping_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
	delivery_basis VARCHAR(20) NOT NULL,
	shipping_days SMALLINT(4) UNSIGNED NOT NULL,
	payment_terms VARCHAR(128) NOT NULL,
	PRIMARY KEY (shipping_id)
) ENGINE=InnoDB;





-----misc tables-----
--agents

--events

--contact_details --(of machinovate)




CREATE TABLE clients (
  client_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT ,

  firstName VARCHAR(50) NOT NULL ,
  lastName VARCHAR(40) NOT NULL ,
  companyName VARCHAR(40) NOT NULL ,
  address VARCHAR(80) NOT NULL ,
  contactNo VARCHAR(40) NOT NULL ,
  email VARCHAR(80) NULL ,

  PRIMARY KEY (client_id)
) ENGINE=InnoDB;



CREATE TABLE orders (
  order_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT ,
  client_id SMALLINT UNSIGNED NOT NULL ,

  date TIMESTAMP NOT NULL ,
  deliveryBasis VARCHAR(20) NOT NULL ,
  shipmentDate DATE NOT NULL ,
  paymentTerms VARCHAR(50) NOT NULL ,
  orderStatus ENUM('COMPLETED', 'PENDING', 'CONFIRMED', 'CANCELLED') NOT NULL ,

  PRIMARY KEY (order_id)
) ENGINE=InnoDB;



CREATE TABLE orderList (
  orderList_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT ,
  order_id SMALLINT UNSIGNED NOT NULL ,

  cmsr_slitter_id SMALLINT UNSIGNED NULL ,
  cmsr_sheeter_id SMALLINT UNSIGNED NULL ,
  cmsr_cutter_id SMALLINT UNSIGNED NULL ,
  misc_bailMach_id SMALLINT UNSIGNED NULL ,
  misc_rollTruck_id SMALLINT UNSIGNED NULL ,

  PRIMARY KEY (orderList_id)
) ENGINE=InnoDB;



CREATE TABLE cmsr_slitter (
  cmsr_slitter_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  orderList_id SMALLINT UNSIGNED NOT NULL,

  SL_Type VARCHAR(20) NOT NULL,
  SL_ProductionVolume FLOAT(6,2) UNSIGNED NOT NULL,
  SL_PaperType VARCHAR(32) NOT NULL,
  SL_GSM VARCHAR(20) NOT NULL,
  SL_RollDiameter VARCHAR(20) NOT NULL,
  SL_SlittingWidth VARCHAR(20) NOT NULL,

  Cutting_AddtlBlade TINYINT(2) UNSIGNED NULL DEFAULT 0,
  Cutting_CoreCutterMachine TINYINT(1) UNSIGNED NULL DEFAULT 0,

  URS_HydraulicShaftless TINYINT(1) UNSIGNED NULL DEFAULT 0,
  URS_Single TINYINT(1) UNSIGNED NULL DEFAULT 0,
  URS_Customized TINYINT(1) UNSIGNED NULL DEFAULT 0,
  URS_ShaftStand TINYINT(1) UNSIGNED NULL DEFAULT 0,
  URS_Others VARCHAR(128) NULL DEFAULT 'N/A',

  URS_TonCapacity FLOAT(6,2) UNSIGNED NOT NULL,

  Sys_WebGuideHydraulicEPC TINYINT(1) UNSIGNED NULL DEFAULT 0,
  Sys_Tension TINYINT(1) UNSIGNED NULL DEFAULT 0,
  Sys_BananaRoll_TensionRoller TINYINT(1) UNSIGNED NULL DEFAULT 0,
  Sys_BrakeSystem TINYINT(1) UNSIGNED NULL DEFAULT 0,
  Sys_FullyComputerized TINYINT(1) UNSIGNED NULL DEFAULT 0,
  Sys_Others VARCHAR(128) NULL DEFAULT 'N/A',

  SL_Details VARCHAR(2048) NULL DEFAULT 'N/A',

  PRIMARY KEY (cmsr_slitter_id)
) ENGINE=InnoDB;


CREATE TABLE cmsr_sheeter (
  cmsr_sheeter_id SMALLINT UNSIGNED NULL AUTO_INCREMENT ,
  orderList_id SMALLINT UNSIGNED NOT NULL ,

  SH_Type VARCHAR(20) NOT NULL,
  SH_ProductionVolume FLOAT(6,2) UNSIGNED NOT NULL,
  SH_PaperType VARCHAR(32) NOT NULL,
  SH_GSM VARCHAR(20) NOT NULL,
  SH_RollDiameter VARCHAR(20) NOT NULL,
  SH_CutOffLength VARCHAR(20) NOT NULL,
  SH_SlittingWidth VARCHAR(20) NOT NULL,

  MainDrive ENUM('Inverter', 'ServoMotor&TouchScreen') NOT NULL ,
  Knife ENUM('Single', 'Twin') NOT NULL ,
  SH_Slitter VARCHAR(20) NULL,

  Sys_

  SH_Details VARCHAR(2048) NULL ,

  PRIMARY KEY (cmsr_sheeter_id)
) ENGINE=InnoDB;


CREATE TABLE cmsr_cutter (
  cmsr_cutter_id SMALLINT UNSIGNED NULL AUTO_INCREMENT ,
  orderList_id SMALLINT UNSIGNED NOT NULL ,

  CT_Type VARCHAR(30) NOT NULL ,
  CT_Details VARCHAR(2048) NULL ,

  PRIMARY KEY (cmsr_cutter_id)
) ENGINE=InnoDB;


CREATE TABLE misc_bailMach (
  misc_bailMach_id SMALLINT UNSIGNED NULL AUTO_INCREMENT ,
  orderList_id SMALLINT UNSIGNED NOT NULL ,

  BM_Quantity TINYINT(2) NOT NULL ,
  BM_Details VARCHAR(2048) NULL ,

  PRIMARY KEY (misc_bailMach_id)
) ENGINE=InnoDB;


CREATE TABLE misc_rollTruck (
  misc_rollTruck_id SMALLINT UNSIGNED NULL AUTO_INCREMENT ,
  orderList_id SMALLINT UNSIGNED NOT NULL ,

  PRT_Quantity TINYINT(2) NOT NULL ,
  PRT_Details VARCHAR(2048) NULL ,

  PRIMARY KEY (misc_rollTruck_id)
) ENGINE=InnoDB;
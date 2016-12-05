/*
Created		5. 12. 2016
Modified		5. 12. 2016
Project		
Model		
Company		
Author		
Version		
Database		mySQL 5 
*/


Create table users (
	id Serial NOT NULL,
	name Varchar(100) NOT NULL,
	email Varchar(150) NOT NULL,
	password Varchar(30) NOT NULL,
	admin Int NOT NULL,
 Primary Key (id)) ENGINE = MyISAM;

Create table comments (
	id Serial NOT NULL,
	user_id Bigint UNSIGNED NOT NULL,
	text Text NOT NULL,
 Primary Key (id)) ENGINE = MyISAM;

Create table events (
	id Serial NOT NULL,
	category_id Bigint UNSIGNED NOT NULL,
	name Varchar(50) NOT NULL,
	description Text NOT NULL,
	time Timestamp NOT NULL,
	city Char(100) NOT NULL,
	country Char(100) NOT NULL,
	price Float,
 Primary Key (id)) ENGINE = MyISAM;

Create table categories (
	id Serial NOT NULL,
	name Varchar(100) NOT NULL,
 Primary Key (id)) ENGINE = MyISAM;

Create table favorites (
	id Serial NOT NULL,
	event_id Bigint UNSIGNED NOT NULL,
	user_id Bigint UNSIGNED NOT NULL,
 Primary Key (id)) ENGINE = MyISAM;


Alter table comments add Foreign Key (user_id) references users (id) on delete  restrict on update  restrict;
Alter table favorites add Foreign Key (user_id) references users (id) on delete  restrict on update  restrict;
Alter table favorites add Foreign Key (event_id) references events (id) on delete  restrict on update  restrict;
Alter table events add Foreign Key (category_id) references categories (id) on delete  restrict on update  restrict;



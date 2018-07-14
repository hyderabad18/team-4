CREATE SCHEMA yfs;

CREATE TABLE yfs.admin ( 
	username             varchar(100)  NOT NULL  ,
	password             varchar(100)  NOT NULL  ,
	CONSTRAINT pk_admin_username PRIMARY KEY ( username )
 ) engine=InnoDB;

CREATE TABLE yfs.applied_volunteers ( 
	id                   int  NOT NULL  AUTO_INCREMENT,
	event_id             int    ,
	v_id                 int    ,
	name                 varchar(100)    ,
	description          text    ,
	timestamp            datetime    ,
	status               bool    ,
	location             varchar(100)    ,
	CONSTRAINT pk_applied_volunteers_id PRIMARY KEY ( id )
 ) engine=InnoDB;

CREATE INDEX idx_applied_volunteers_event_id ON yfs.applied_volunteers ( event_id );

CREATE INDEX idx_applied_volunteers_v_id ON yfs.applied_volunteers ( v_id );

CREATE INDEX idx_applied_volunteers_name ON yfs.applied_volunteers ( name );

CREATE INDEX idx_applied_volunteers_description ON yfs.applied_volunteers ( description );

CREATE TABLE yfs.event_entry ( 
	event_id             int  NOT NULL  AUTO_INCREMENT,
	event_name           varchar(100)  NOT NULL  ,
	description          text    ,
	category             int  NOT NULL  ,
	location             varchar(100)  NOT NULL  ,
	start_date           date    ,
	end_date             date    ,
	volunteers_required  int    ,
	timestamp            datetime    ,
	CONSTRAINT pk_evententry_event_id PRIMARY KEY ( event_id ),
	CONSTRAINT unq_event_entry_description UNIQUE ( description ) 
 ) engine=InnoDB;

CREATE TABLE yfs.volunteer_reg ( 
	v_id                 int  NOT NULL  AUTO_INCREMENT,
	name                 varchar(100)    ,
	email                varchar(150)  NOT NULL  ,
	contact              int    ,
	profression          varchar(100)    ,
	location             varchar(150)  NOT NULL  ,
	password             varchar(100)  NOT NULL  ,
	timestampp           datetime    ,
	CONSTRAINT pk_volunteer_reg_v_id PRIMARY KEY ( v_id ),
	CONSTRAINT unq_volunteer_reg_name UNIQUE ( name ) 
 ) engine=InnoDB;


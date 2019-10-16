drop table if exists appointment;
drop table if exists profile;
drop table if exists calendar;

create table appointment(
	appointmentProfileId binary(16) not null,
	appointmentDatetime datetime(6) not null,
	foreign key(appointmentProfileId)
		primary key(appointmentDatetime)
);
​
create table profile(
	profileId binary(16) not null,
	profileEmail varchar(128) not null,
	profileName varchar(32) not null,
	primary key(profileId)

);

create table calendar(
	calendarId binary(16) not null,
	calendarStylistName varchar(32) not null,
	calendarStylistSpecialty varchar (32) not null,
	primary key (calendarId)
);
​











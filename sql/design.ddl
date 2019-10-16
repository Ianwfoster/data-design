drop table if exists appointment;
drop table if exists calendar;
drop table if exists profile;



create table profile(
	profileId binary(16) not null,
	profileEmail varchar(128) not null,
	profileName varchar(32) not null,
	profilePhoneNumber char(10) not null,
	primary key(profileId)

);



create table calendar(
	calendarId binary(16) not null,
	calendarStylistName varchar(32) not null,
	calendarStylistSpecialty varchar (32) not null,
	primary key (calendarId)

);

create table appointment(
	appointmentId binary(16) not null,
	appointmentProfileId varchar(32),
	appointmentDatetime datetime(6),
	primary key(appointmentId),
	foreign key(appointmentProfileId) references profile(profileId)


);








drop table if exists profile;
drop table if exists calendar;
drop table if exists appointment;

​
create table profile(
	profileId binary(16) not null,
	profileEmail varchar(128) not null,
	profileName varchar(32) not null,
	unique(profileEmail),
	unique(profileName),
	INDEX(profileEmail),
	primary key(profileId)
);
​
​
create table calendar(
	calendarId binary(16) not null,
	calendarStylistName varchar(32) not null,
	calendarStylistSpecialty varchar(32)not null,
	primary key(calendarId)
);

	create table appointment(
	appointmentProfileId binary(16) not null,
	appointmentCalendarId binary(16) not null,
	appointmentDatetime datetime(6) not null,
	index(appointmentProfileId),
	foreign key(appointmentProfileId) references profile(profileId),
	primary key(appointmentDatetime)
);
​










